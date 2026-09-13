@extends('layouts.denlie')
@section('title', 'Denlie | Something New Is Coming')
@section('description', 'Something new is coming to Denlie. Explore custom dance studio websites or contact Dennis to express your interest and hear about upcoming developments.')
@section('content')
    <div class="container py-5 mt-hero denlie-hero">
        <div class="denlie-hero-image gsap-move"><img src="/images/fluid-frames-landscape-indoors-2.jpg" class="img-fluid" alt="Dancers moving together in the studio"></div>
        <div class="mt-hero-copy">
            <h1 class="font-xl soft-white">Something new<br>is coming to Denlie.</h1>
            <p class="font-lg soft-white">Built for studios.<br>Designed around families.</p>
        </div>
    </div>

    <section class="blush-pink-bg py-5 section-reveal">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-6">
                    <h2 class="font-xl">A new chapter for your studio website.</h2>
                    <p class="font-md">We’re working on new ways to help dance families find their next step. More to share soon.</p>
                    <a href="#studio-interest" class="denlie-button deep-navy-bg soft-white font-sm">Stay in the loop</a>
                </div>
                <div class="col-12 col-lg-6 denlie-feature-copy">
                    <h2 class="font-lg">Need a custom website now?</h2>
                    <p class="font-md">Custom design is still available. Work directly with Dennis to build a website around your studio.</p>
                    <a href="{{ route('custom-websites') }}" class="denlie-button soft-gold-bg deep-charcoal font-sm">Explore custom websites</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 section-reveal" id="studio-interest">
        <div class="row g-4 align-items-start">
            <div class="col-12 col-lg-5">
                <h2 class="font-xl">Be part of what’s next.</h2>
                <p class="font-md">Share a little about your studio. Ask a question, express your interest, or let Dennis know you’d like updates.</p>
                <p class="font-sm">For updates, just mention “Keep me posted” in your message.</p>
            </div>
            <div class="col-12 col-lg-7">
                <div id="mt-interest-form" data-action="{{ route('mt.interest') }}"></div>
                <noscript><p class="font-md">Email <a href="mailto:customdenlie@gmail.com">customdenlie@gmail.com</a> to get in touch.</p></noscript>
            </div>
        </div>
    </section>
@endsection
