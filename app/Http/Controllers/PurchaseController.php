<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient;

class PurchaseController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $charges = $user->fetchStripeCharges();
        $latestInvoice = $user->fetchLatestInvoice();

        return view('success', compact('charges', 'latestInvoice', 'user'));
    }

//    public function createCheckoutSession(Request $request) {
//        $stripe = new StripeClient(env('STRIPE_SECRET'));
//        $user = auth()->user();
//
//        // Retrieve the user's cart and items
//        $cart = Cart::where('user_id', $user->id)->first();
//        $cartItems = $cart->items;
//
//        // Initialize lineItems array
//        $lineItems = [];
//
//        // Generate lineItems from cart contents
//        foreach ($cartItems as $item) {
//            $lineItems[] = [
//                'price' => $item->stripe_price_id,
//                'quantity' => $item->quantity,
//            ];
//        }

        //working model below, not working above
    public function createCheckoutSession(Request $request) {
        $stripe = new StripeClient(env('STRIPE_SECRET'));

        // Check if the user already has a Stripe Customer ID
//        if (auth()->user()->stripe_id) {
//            $customerId = auth()->user()->stripe_id;
//        } else {
//            // Create a new Stripe Customer
//            $customer = $stripe->customers->create([
//                'email' => auth()->user()->email,
//            ]);
//
//            // Store the Stripe Customer ID in your database
//            $user = auth()->user();
//            $user->stripe_id = $customer->id;
//            $user->save();
//
//            $customerId = $customer->id;
//        }

//        $lineItems = [
//            [
//                'price' => 'price_1OnZV5Haney56bwrDGG2nfh3', // Replace with your actual price ID for the custom website
//                'quantity' => 1,
//            ]
//        ];

        // Check for add-ons and add them to the line items
        $addons = $request->input('addons', []);
        if (in_array('custom_design', $addons)) {
            $lineItems[] = ['price' => 'price_1P4P0pHaney56bwriA08xJDE', 'quantity' => 1];
        }
        if (in_array('licensed_design', $addons)) {
            $lineItems[] = ['price' => 'price_1P4P3zHaney56bwraIzaeXFY', 'quantity' => 1];
        }
        if (in_array('custom_refresh', $addons)) {
            $lineItems[] = ['price' => 'price_1P4P4bHaney56bwr5G9uodK9', 'quantity' => 1];
        }
        if (in_array('licensed_refresh', $addons)) {
            $lineItems[] = ['price' => 'price_1P4P6OHaney56bwrQCJ58Yok', 'quantity' => 1];
        }
        if (in_array('online_sales', $addons)) {
            $lineItems[] = ['price' => 'price_1P4P93Haney56bwrLdOcsQjU', 'quantity' => 1];
        }
        if (in_array('email_marketing_suite', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PACHaney56bwrOn8uAhRD', 'quantity' => 1];
        }
        if (in_array('custom_solutions', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PBJHaney56bwrjEtiN5fG', 'quantity' => 1];
        }
        if (in_array('family_flex_scheduler', $addons)) {
            $lineItems[] = ['price' => 'price_1POjNSHaney56bwrNiQAr3JZ', 'quantity' => 1];
        }
        if (in_array('ascension_level_placement', $addons)) {
            $lineItems[] = ['price' => 'price_1POjPHHaney56bwrqXN03B23', 'quantity' => 1];
        }
        if (in_array('SiteMaster_CMS', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PCsHaney56bwrRv4IBXZv', 'quantity' => 1];
        }
        if (in_array('animation', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PEeHaney56bwrc9KCeAC1', 'quantity' => 1];
        }
        if (in_array('password_page', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PFaHaney56bwrALQxlaTm', 'quantity' => 1];
        }
        if (in_array('additional_page', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PGdHaney56bwreyYvyLpL', 'quantity' => 1];
        }
        if (in_array('additional_form', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PHVHaney56bwrnQvp5x9h', 'quantity' => 1];
        }
        if (in_array('additional_hour', $addons)) {
            $lineItems[] = ['price' => 'price_1POjLWHaney56bwrHp3Xgpiw', 'quantity' => 1];
        }
        if (in_array('promo_feed', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PITHaney56bwrxrtEnzIC', 'quantity' => 1];
        }
        if (in_array('blog', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PJGHaney56bwrmKWucTlg', 'quantity' => 1];
        }
        if (in_array('newsletter', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PKAHaney56bwrhtKgY6Ew', 'quantity' => 1];
        }
        if (in_array('recital_hub', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PL2Haney56bwrbTwlzfyw', 'quantity' => 1];
        }
        if (in_array('EngagePlus', $addons)) {
            $lineItems[] = ['price' => 'price_1P4PMBHaney56bwrN3jrHXrG', 'quantity' => 1];
        }


        $session = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
//            'customer' => $customerId, // Use the Stripe Customer ID here
            'success_url' => url('/subscriptions'),
            'cancel_url' => url('/start-your-journey'),
            'allow_promotion_codes' => true,
        ]);

        // Redirect directly to the Stripe Checkout page
        return redirect($session->url);
    }

}
