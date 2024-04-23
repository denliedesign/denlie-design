<div class="bg-warm">
    <div class="container py-5">
        <h2 class="fonts-play text-center">{{ $product }}</h2>
        <div class="my-5"></div>
        <div class="row">
            <div class="col-sm">
                <img src="/images/{{ $screenshot1 }}" alt="website screenshot" class="img-fluid shadow rounded my-3">
                @if($screenshot2)
                    <img src="/images/{{ $screenshot2 }}" alt="website screenshot" class="img-fluid shadow rounded my-3">
                @endif
            </div>
            <div class="col-sm">
                {!! $description !!}
                <div class="mt-3">
                    <a href="/start-your-journey" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Start Your Journey</a>
                </div>
            </div>
        </div>
        <div class="my-5"></div>
        <h2 class="fonts-play text-center">Pairs Well With {{ $pair }}</h2>
        <div class="my-5"></div>
        <div class="row">
            <div class="col-sm d-none d-md-block" style="position: relative; width: 100%; height: 600px;">
                <div>
                    <img src="/images/{{ $icon }}" alt="web screenshot" class="img-fluid shadow rounded" style="position: absolute; top: -20px; left: -90px; z-index: 1; transform: scale(0.7);">
                    <img src="/images/{{ $iconPair }}" alt="web screenshot" class="img-fluid shadow rounded" style="position: absolute; bottom: 140px; right: -10px; z-index: 2; transform: scale(0.8);">
                </div>
            </div>
            <div class="col-sm d-block d-md-none">
                <div>
                    <img src="/images/{{ $icon }}" alt="web screenshot" class="img-fluid shadow rounded">
                    <img src="/images/{{ $iconPair }}" alt="web screenshot" class="img-fluid shadow rounded my-3">
                </div>
            </div>
            <div class="col-sm">
                {!! $descriptionPair !!}
                <div class="mt-3">
                    <a href="/start-your-journey" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow m-2">Start Your Journey</a>
                    <a href="/{{ $linkPair }}" class="fonts-robo btn btn-lg btn-outline-coral rounded m-2">Learn More About {{ $pair }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
