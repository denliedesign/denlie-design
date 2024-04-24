<div class="col my-2">
    <div class="card bg-warm" style="border: none;">
        <div class="card-body">
            <div class="">
                <img src="/images/icons/{{ $icon }}.png" class="img-fluid" style="max-height: 259px; width: auto;" alt="">
            </div>
            <div class="fonts-robo" style="height: auto; line-height: 1 !important;">
                <p class="pb-0 text-capitalize"><a class="brand-link" href="/{{ strtolower(str_replace(' ', '-', $item)) }}">{{ $item }}</a></p>
                <p style="font-size: 16px !important;" class="pb-0">{{ $description }}</p>
                <div class="d-md-flex align-items-center">
                    <p class="fw-bold pb-0 mb-0">${{ $cost }}</p> <span class="d-none d-md-block">&nbsp; &nbsp;</span>
                    <button class="my-1 btn btn-coral color-warm shadow rounded add-to-cart" data-name="addons[]" data-cost="{{ $cost }}" data-value="{{ str_replace(' ', '_', $item) }}">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="col my-2">--}}
{{--    <div class="card form-check bg-warm" style="border: none;">--}}
{{--        <div class="card-body">--}}
{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="/images/icons/{{ $icon }}.png" class="img-fluid" style="height: 259px; width: auto;" alt="">--}}
{{--            </div>--}}
{{--            <div class="fonts-robo" style="height: 150px; line-height: 1 !important;">--}}
{{--                <p class="pb-0 text-center">{{ $item }}</p>--}}
{{--                <p style="font-size: 16px !important;" class="pb-0 text-center">{{ $description }}</p>--}}
{{--                <table class="table">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th scope="col">item</th>--}}
{{--                        <th scope="col">cost</th>--}}
{{--                        <th scope="col">cart</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                        @include($group)--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
