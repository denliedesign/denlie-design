<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description', 'A personalized website for your dance studio. Help new and returning families find the right classes with Denlie.')">
    <meta property="og:title" content="@yield('title', 'Denlie | Personalized Dance Studio Websites')">
    <meta property="og:description" content="@yield('description', 'A personalized website for your dance studio. Help new and returning families find the right classes with Denlie.')">
    <meta property="og:image" content="https://denliedesign.com/images/mdu-screen.png">
    <meta property="og:url" content="{{ url()->current() }}">

    <title>@yield('title', 'Denlie | Personalized Dance Studio Websites')</title>

    <link href="{{ asset('/css/style-mt.css') }}" rel="stylesheet">
    @vite('resources/js/mt-interest.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    </style>

    <script src="https://js.stripe.com/v3/"></script> <!-- Include Stripe.js library -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134589403-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134589403-1');
    </script>

<link href="{{ asset('/css/denlie.css') }}" rel="stylesheet">
@stack('styles')
<link href="{{ asset('/css/project-media.css') }}" rel="stylesheet">
</head>
<body>

@include('_nav-denlie')

{{--    @if(session()->has('message'))--}}
{{--        <h2 class="fonts-dancing color-coral text-center">Success!</h2>--}}
{{--        <p>{{ session()->get('message') }}</p>--}}
{{--    @endif--}}

<main>@yield('content')</main>
@include('_footer-denlie')

<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/ScrollTrigger.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="/js/denlie.js"></script>
</body>
</html>

