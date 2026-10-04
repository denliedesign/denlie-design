@extends('layouts.denlie')
@section('title', 'Denlie | Websites and tools built around dance families')
@section('description', 'Preview the Denlie Platform, explore custom dance studio websites, and discover the real studio projects behind Denlie.')
@section('content')
    <div class="container py-5 mt-hero denlie-hero denlie-home-hero">
        <div class="denlie-hero-image gsap-move"><img src="/images/fluid-frames-landscape-outdoors.jpg" class="img-fluid" alt="Dancer balancing against a city skyline"></div>
        <div class="mt-hero-copy">
            <h1 class="font-xl soft-white">A new chapter<br>for Denlie.</h1>
            <p class="font-lg soft-white">Built for studios.<br>Designed around families.</p>
            <a href="{{ route('denlie.platform') }}" class="denlie-button soft-gold-bg deep-charcoal font-sm">Preview Denlie Platform →</a>
        </div>
    </div>

    <section class="blush-pink-bg py-5 section-reveal">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-6">
                    <p class="denlie-kicker">In development</p>
                    <h2 class="font-xl">Meet Denlie Platform.</h2>
                    <p class="font-md">Your studio website, class schedule, and student placements, connected to help each family find their next step.</p>
                    <p class="font-sm">Explore the working preview and help shape what comes next.</p>
                    <a href="{{ route('denlie.platform') }}" class="denlie-button deep-navy-bg soft-white font-sm">Preview the platform →</a>
                </div>
                <div class="col-12 col-lg-6 denlie-feature-copy">
                    <p class="denlie-kicker">Available now · Denlie Design</p>
                    <h2 class="font-lg">A website that feels like your studio.</h2>
                    <p class="font-md">Work directly with Dennis on custom website design, ongoing care, and a clear path for families to get started.</p>
                    <a href="{{ route('custom-websites') }}" class="denlie-button soft-gold-bg deep-charcoal font-sm">Explore custom websites</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 section-reveal">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-5"><p class="denlie-kicker">Our work · 2020–2026</p><h2 class="font-xl">See how it all started.</h2></div>
            <div class="col-12 col-lg-7 denlie-feature-copy"><x-project-media device="laptop" image="/images/denlie/25-class-finder-desktop.webp" alt="Denlie Platform class finder and family class plan" caption="Where those ideas led: the Denlie Platform preview." /><p class="font-md">A private placement page. A family scheduler. Years of real studio feedback. Follow the projects that grew into Denlie Platform.</p><a href="{{ route('portfolio.denlie') }}" class="denlie-text-link font-sm">Explore the project timeline →</a></div>
        </div>
    </section>

    <section class="container py-5 section-reveal" id="studio-interest">
        <div class="row g-4 align-items-start">
            <div class="col-12 col-lg-5">
                <h2 class="font-xl">Let’s talk about your studio.</h2>
                <p class="font-md">Interested in the platform, planning a custom website, or just have a question? Tell Dennis what you have in mind.</p>
                <p class="font-sm">For updates, just mention “Keep me posted” in your message.</p>
            </div>
            <div class="col-12 col-lg-7">
                <div id="mt-interest-form" data-action="{{ route('mt.interest') }}"></div>
                <noscript><p class="font-md">Email <a href="mailto:customdenlie@gmail.com">customdenlie@gmail.com</a> to get in touch.</p></noscript>
            </div>
        </div>
    </section>
@endsection
