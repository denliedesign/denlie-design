@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Your Shopping Cart</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($cartItems) && count($cartItems) > 0)
                    @foreach ($cartItems as $item)
                        <tr>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->stripe_price_id }}</td>
                            <td><a href="{{ route('cart.remove', $item->id) }}" class="btn btn-danger btn-sm">Remove</a></td>
                        </tr>
                    @endforeach
                    @else
                        <p>Your cart is empty.</p>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <form action="/create-checkout-session" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Proceed to Checkout</button>
                </form>
            </div>
        </div>

        <h2 class="open-concept-title">All Your Website Needs In One Place</h2>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <div class="col my-2">
                <div class="card" style="border: none;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="/images/icons/icon-1.png" class="img-fluid" style="height: 259px; width: auto;" alt="">
                        </div>
                        <div class="text-center fonts-robo" style="height: 150px; line-height: 1 !important;">
                            <label for="design" class="form-check-label">Design</label>
                            <p style="font-size: 16px !important;" class="pb-0 my-1">Includes custom website design, mobile-ready interfaces, UI/UX optimization, branding, photography, and animated elements.</p>
                            <p style="font-size: 16px !important;" class="color-coral">$3000</p>
                        </div>
                        <div>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Animated Design">
                                <input type="hidden" name="stripe_price_id" value="price_1OnZWJHaney56bwrrcDdUS2o">
                                <input type="hidden" name="quantity" value="1"> <!-- Default quantity to 1; adjust as needed -->

                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
