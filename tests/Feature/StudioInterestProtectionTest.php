<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class StudioInterestProtectionTest extends TestCase
{
    private function inquiry(array $overrides = []): array
    {
        return array_merge([
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
        $this->postJson('/mt/interest', $this->inquiry(['website_url' => 'spam']))->assertOk();
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
}
