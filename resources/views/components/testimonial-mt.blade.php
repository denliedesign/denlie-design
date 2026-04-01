<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 my-5 py-5">
    @if($order == "odd")
        <div class="d-block d-md-none mb-2">
            <img src="/images/scroll-{{ $scroll }}.gif" alt="" class="img-fluid rounded shadow">
        </div>
        <div class="col p-0 m-0 d-flex align-items-center">
            <div class="{{ $background }}-bg d-none d-md-block" style="height: 350px; width: 575px; position: relative;">
                <p class="soft-white font-xxl" style="position: absolute; top: -50px; left: -30px; z-index: 1; !important; font-weight: 900 !important;">{{ $state }}</p>
                <img src="/images/scroll-{{ $scroll }}.gif" alt="" class="img-fluid rounded shadow" style="position: absolute; z-index: 2; bottom: -20px; right: -40px;">
            </div>
        </div>
        <div class="col d-flex align-items-center justify-content-center">
            <div class="text-center">
                <div class="d-flex justify-content-center">
                    <img src="/images/logo-{{ $logo }}.png" alt="logo" class="img-fluid" style="filter: grayscale(100%) brightness(20%); opacity: 20%; width: 40%;">
                </div>
                <h2 class="font-lg">{{ $studio }}</h2>
                {{--                            <p>New York</p>--}}
                <p class="font-md">"{!! $quote !!}"</p>
            </div>
        </div>
    @else
        <div class="d-block d-md-none mb-2">
            <img src="/images/scroll-{{ $scroll }}.gif" alt="" class="img-fluid rounded shadow">
        </div>
        <div class="col d-flex align-items-center justify-content-center">
            <div class="text-center">
                <div class="d-flex justify-content-center">
                    <img src="/images/logo-{{ $logo }}.png" alt="logo" class="img-fluid" style="filter: grayscale(100%) brightness(20%); opacity: 20%; width: 40%;">
                </div>
                <h2 class="font-lg">{{ $studio }}</h2>
                {{--                            <p>New York</p>--}}
                <p class="font-md">"{!! $quote !!}"</p>
            </div>
        </div>
        <div class="col p-0 m-0 d-flex align-items-center">
            <div class="{{ $background }}-bg d-none d-md-block" style="height: 350px; width: 575px; position: relative;">
                <p class="soft-white font-xxl" style="position: absolute; top: -50px; left: -30px; z-index: 1; !important; font-weight: 900 !important;">{{ $state }}</p>
                <img src="/images/scroll-{{ $scroll }}.gif" alt="" class="img-fluid rounded shadow" style="position: absolute; z-index: 2; bottom: -20px; right: -40px;">
            </div>
        </div>
    @endif
</div>
