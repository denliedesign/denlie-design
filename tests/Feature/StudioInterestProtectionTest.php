<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Tests\TestCase;

class StudioInterestProtectionTest extends TestCase
{
    private function inquiry(array $overrides = []): array
    {
        $this->withSession(['_token' => 'test-session']);
        return array_merge([
            '_form_guard' => Crypt::encryptString(json_encode([
                'issued' => now()->timestamp - 3,
                'session' => hash('sha256', 'test-session'),
                'nonce' => (string) Str::uuid(),
            ])),
            'name' => 'Studio Owner',
            'email' => 'owner@example.com',
            'message' => 'Please tell me about Denlie.',
            'timeline' => 'Just exploring',
            'website_url' => '',
        ], $overrides);
    }

    public function test_legitimate_inquiry_sends_one_email(): void
    {
        Mail::shouldReceive('raw')->once()->withArgs(function ($body, $configure) {
            $message = new \Illuminate\Mail\Message(new \Symfony\Component\Mime\Email);
            $configure($message);
            $this->assertSame('customdenlie@gmail.com', $message->getSymfonyMessage()->getTo()[0]->getAddress());
            $this->assertSame('owner@example.com', $message->getSymfonyMessage()->getReplyTo()[0]->getAddress());
            return str_contains($body, 'Please tell me about Denlie.');
        });
        $this->postJson('/mt/interest', $this->inquiry())->assertOk();
    }

    public function test_honeypot_does_not_send_email(): void
    {
        Mail::shouldReceive('raw')->never();
        $this->postJson('/mt/interest', $this->inquiry(['website_url' => 'spam']))->assertUnprocessable();
    }

    public function test_repeated_requests_are_throttled_even_with_different_emails(): void
    {
        Mail::shouldReceive('raw')->times(3);
        for ($i = 0; $i < 3; $i++) {
            $this->postJson('/mt/interest', $this->inquiry(['email' => "owner{$i}@example.com"]))->assertOk();
        }
        $this->postJson('/mt/interest', $this->inquiry())->assertStatus(429)->assertHeader('Retry-After');
    }

    public function test_header_injection_is_rejected(): void
    {
        Mail::shouldReceive('raw')->never();
        $this->postJson('/mt/interest', $this->inquiry(['name' => "Owner\r\nBcc: other@example.com"]))
            ->assertUnprocessable()->assertJsonValidationErrors('name');
    }

    public function test_invalid_and_oversized_fields_are_rejected(): void
    {
        Mail::shouldReceive('raw')->never();
        $this->postJson('/mt/interest', $this->inquiry([
            'email' => ['owner@example.com'],
            'timeline' => 'unrecognized',
            'message' => str_repeat('a', 2001),
        ]))->assertUnprocessable()->assertJsonValidationErrors(['email', 'timeline', 'message']);
    }

    public function test_missing_tampered_fast_expired_and_wrong_session_guards_are_rejected(): void
    {
        Mail::shouldReceive('raw')->never();
        foreach (['', 'tampered'] as $token) {
            $this->postJson('/mt/interest', $this->inquiry(['_form_guard' => $token]))
                ->assertUnprocessable();
        }
        foreach ([[0, 'test-session'], [7201, 'test-session'], [3, 'another-session']] as [$age, $session]) {
            $guard = Crypt::encryptString(json_encode([
                'issued' => now()->timestamp - $age,
                'session' => hash('sha256', $session),
                'nonce' => (string) Str::uuid(),
            ]));
            // Use distinct IPs so this checks guards rather than the request limit.
            $this->withServerVariables(['REMOTE_ADDR' => '192.0.2.'.($age % 200 + 1)])
                ->postJson('/mt/interest', $this->inquiry(['_form_guard' => $guard]))
                ->assertUnprocessable();
        }
    }

    public function test_successful_guard_cannot_be_replayed(): void
    {
        Mail::shouldReceive('raw')->once();
        $payload = $this->inquiry();
        $this->postJson('/mt/interest', $payload)->assertOk()->assertJsonStructure(['guard']);
        $this->postJson('/mt/interest', $payload)->assertUnprocessable();
    }

    public function test_validation_errors_allow_correction_with_the_same_guard(): void
    {
        Mail::shouldReceive('raw')->once();
        $payload = $this->inquiry(['email' => 'invalid']);
        $this->postJson('/mt/interest', $payload)->assertUnprocessable();
        $payload['email'] = 'owner@example.com';
        $this->postJson('/mt/interest', $payload)->assertOk();
    }

    public function test_captcha_requires_matching_hostname_and_action(): void
    {
        config(['form_security.turnstile_enabled' => true,
            'form_security.site_key' => 'site-key', 'form_security.secret_key' => 'secret-key']);
        Mail::shouldReceive('raw')->once();
        Http::fake(['challenges.cloudflare.com/*' => Http::sequence()
            ->push(['success' => true, 'action' => 'studio_interest', 'hostname' => 'evil.example'])
            ->push(['success' => true, 'action' => 'wrong', 'hostname' => 'denliedesign.com'])
            ->push(['success' => true, 'action' => 'studio_interest', 'hostname' => 'denliedesign.com'])]);
        for ($i = 0; $i < 3; $i++) {
            $response = $this->postJson('/mt/interest', $this->inquiry(['cf-turnstile-response' => 'token']));
            $i === 2 ? $response->assertOk() : $response->assertUnprocessable();
        }
    }

    public function test_captcha_fails_closed_when_missing_or_unavailable(): void
    {
        config(['form_security.turnstile_enabled' => true,
            'form_security.site_key' => 'site-key', 'form_security.secret_key' => 'secret-key']);
        Mail::shouldReceive('raw')->never();
        Http::fake(['challenges.cloudflare.com/*' => Http::response([], 503)]);
        $this->postJson('/mt/interest', $this->inquiry())->assertUnprocessable();
        $this->postJson('/mt/interest', $this->inquiry(['cf-turnstile-response' => 'token']))->assertUnprocessable();
        config(['form_security.secret_key' => null]);
        $this->postJson('/mt/interest', $this->inquiry(['cf-turnstile-response' => 'token']))->assertUnprocessable();
    }
}
