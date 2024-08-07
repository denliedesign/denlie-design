@extends('layouts.app')
@section('title', $title)
@section('description', $description)
@section('content')

    <div class="bg-warm">
        <div class="container">
            <section class="py-5">
                <div>
                    <div class="row text-end my-3">
                        <div class="col-md d-flex align-items-center">
                            <div>
                                <h2 class="fonts-play mt-2 mb-0">{{ $head1 }}</h2>
                                <p>
                                    {{ $content1 }}
                                </p>
                                <div class="">
                                    <a href="/start-your-journey" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Start Your Journey</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-items-center">
                            <img src="/images/{{ $image1 }}" alt="advanced solo dancer" class="img-fluid shadow rounded">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md d-flex align-items-center">
                            <img src="/images/{{ $image2 }}" alt="advanced solo dancer" class="img-fluid shadow rounded">
                        </div>
                        <div class="col-md d-flex align-items-center">
                            <div>
                                <h2 class="fonts-play mt-2 mb-0">{{ $head2 }}</h2>
                                <p>
                                    {{ $content2 }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-end my-3">
                        <div class="col-md d-flex align-items-center">
                            <div>
                                <h2 class="fonts-play mt-2 mb-0">{{ $head3 }}</h2>
                                <p>
                                    {{ $content3 }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md d-flex align-items-center">
                            <img src="/images/{{ $image3 }}" alt="advanced solo dancer" class="img-fluid shadow rounded">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md d-flex align-items-center">
                            <img src="/images/{{ $image4 }}" alt="advanced solo dancer" class="img-fluid shadow rounded">
                        </div>
                        <div class="col-md d-flex align-items-center">
                            <div>
                                <h2 class="fonts-play mt-2 mb-0">{{ $head4 }}</h2>
                                <p>
                                    {{ $content4 }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-end my-3">
                        <div class="col-md d-flex align-items-center">
                            <div>
                                <h2 class="fonts-play mt-2 mb-0">{{ $head5 }}</h2>
                                <p>
                                    {{ $content5 }}
                                </p>
                                <div class="">
                                    <a href="/start-your-journey" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Start Your Journey</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-items-center">
                            <img src="/images/{{ $image5 }}" alt="advanced solo dancer" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
