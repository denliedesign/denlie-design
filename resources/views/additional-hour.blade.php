@extends('layouts.app')
@section('content')

    <div class="bg-warm">
        <div class="container py-5">
            <h2 class="fonts-play text-center">Additional Hour</h2>
            <div class="my-5"></div>
            <div class="row">
{{--                <div class="col-sm">--}}
{{--                    <img src="/images/{{ $screenshot1 }}" alt="website screenshot" class="img-fluid shadow rounded my-3">--}}
{{--                    @if($screenshot2)--}}
{{--                        <img src="/images/{{ $screenshot2 }}" alt="website screenshot" class="img-fluid shadow rounded my-3">--}}
{{--                    @endif--}}
{{--                </div>--}}
                <div class="col-sm">
                    <p>
                        This option allows you to purchase extra maintenance time for your website. If your maintenance needs exceed the included hours in your plan, simply add the number of additional hours required to ensure your website is up to date.
                    </p>
                    Benefits:
                    <ul>
                        <li><strong>Flexible Support:</strong> Easily extend your maintenance time based on your needs.</li>
                        <li><strong>Convenience:</strong> Purchase additional hours directly from the site without any delay.</li>
                        <li><strong>Continuous Operation:</strong> Ensure your website remains up-to-date and fully functional.</li>
                    </ul>
                    <div class="mt-3">
                        <a href="/start-your-journey" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Get Started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
