@extends('layouts.app')
@section('content')

    <div class="bg-warm">

{{--        <div class="banner-wrap">--}}
{{--            <div class="banner"></div>--}}
{{--        </div>--}}
{{--        <div style="height: 300px; overflow: hidden;">--}}
{{--            <img src="/images/banner.jpg" alt="">--}}
{{--        </div>--}}

        <div class="container py-5">
            <h2 class="fonts-dancing color-coral text-center">Success!</h2>
            <p class="">
                Thank you for purchasing a Denlie Design website. We are excited to begin working on this project with you and will contact you soon!
                You can reach Dennis anytime at 949-636-1444 or at customdenlie@gmail.com
            </p>
            <h2 class="fonts-play">Account</h2>
            <ul style="list-style-type: none;">
                <li><strong>Name: </strong>{{ $user->name }}</li>
                <li><strong>Email: </strong>{{ $user->email }}</li>
            </ul>
            {{-- Display Latest Subscription Invoice --}}
            <h2 class="fonts-play">Subscriptions</h2>
            @if ($latestInvoice)
                @foreach ($latestInvoice->lines->data as $lineItem)
                    <div>
                        <ul style="list-style-type: none;">
                            <li>{{ $lineItem->description }} </li>
                            {{--                       <strong>Amount:</strong> ${{ number_format($lineItem->amount / 100, 2) }}--}}
                        </ul>
                    </div>
                @endforeach
            @else
                <p>No subscription details found.</p>
            @endif
            {{-- Display Charges --}}
            <h2 class="fonts-play">Charges</h2>
            @if (!empty($charges))
                @foreach ($charges as $charge)
                    <ul style="list-style-type: none;">
{{--                        <p><strong>Description:</strong> {{ $charge->description }}</p>--}}
                        <li><strong>Amount:</strong> ${{ number_format($charge->amount / 100, 2) }} &nbsp; &middot; &nbsp; <strong>Date:</strong> {{ \Carbon\Carbon::createFromTimestamp($charge->created)->toFormattedDateString() }}</li>
                    </ul>
                @endforeach
            @else
                <p>No one-time purchases found.</p>
            @endif

            <div class="my-5">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-coral color-warm rounded shadow">Logout</button>
                </form>
            </div>
        </div>
    </div>

@endsection
