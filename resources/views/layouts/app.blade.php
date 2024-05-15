<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('description', 'We create custom, dance websites that engage and convert, offering complete digital solutions through a seamless one-stop platform. Get the best dance studio website design.')">
        <meta property="og:title" content="Denlie Design | The Best Dance Studio Web Design">
        <meta property="og:description" content="We create custom, dance websites that engage and convert, offering complete digital solutions through a seamless one-stop platform. Get the best dance studio website design.">
        <meta property="og:image" content="https://denliedesign.com/images/mdu-screen.png">
        <meta property="og:url" content="https://denliedesign.com">

        <title>@yield('title', 'Denlie Design | The Best Dance Studio Web Design')</title>

        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap');
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

    </head>
    <body>

    @include('_nav')

{{--    @if(session()->has('message'))--}}
{{--        <h2 class="fonts-dancing color-coral text-center">Success!</h2>--}}
{{--        <p>{{ session()->get('message') }}</p>--}}
{{--    @endif--}}

    @yield('content')
    @include('_footer')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
    </body>
</html>
