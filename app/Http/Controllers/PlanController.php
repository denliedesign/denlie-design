<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;

class PlanController extends Controller
{
    public function createPlanSession(Request $request) {
        $stripe = new StripeClient(env('STRIPE_SECRET'));

//        // Check if the user already has a Stripe Customer ID
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

        $lineItems = [
            [
                'price' => 'price_1QKv5VHaney56bwrmoEcnKMM', // Replace with your actual price ID for the custom website
                'quantity' => 1,
            ]
        ];

        // Check for add-ons and add them to the line items
//        $addons = $request->input('addons', []);
//        if (in_array('denlie', $addons)) {
//            $lineItems[] = ['price' => 'price_1QKv5VHaney56bwrmoEcnKMM', 'quantity' => 1];
//        }
//        if (in_array('hosting_and_maintenance', $addons)) {
//            $lineItems[] = ['price' => 'price_1P31niHaney56bwruz9pUg7f', 'quantity' => 1];
//        }
//        if (in_array('SEO', $addons)) {
//            $lineItems[] = ['price' => 'price_1P31pSHaney56bwraJhAaMdM', 'quantity' => 1];
//        }
//        if (in_array('blog_writing', $addons)) {
//            $lineItems[] = ['price' => 'price_1P31zYHaney56bwrs08H4eGR', 'quantity' => 1];
//        }
//        if (in_array('email_marketing_optimization', $addons)) {
//            $lineItems[] = ['price' => 'price_1P321SHaney56bwrwmm9fX0z', 'quantity' => 1];
//        }
//        if (in_array('chat', $addons)) {
//            $lineItems[] = ['price' => 'price_1P322aHaney56bwrBuhGgl2n', 'quantity' => 1];
//        }
//        if (in_array('additional_professional_email', $addons)) {
//            $lineItems[] = ['price' => 'price_1P324THaney56bwryQnz3Mez', 'quantity' => 1];
//        }

        $session = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'subscription',
//            'customer' => $customerId, // Use the Stripe Customer ID here
            'success_url' => url('/dashboard'),
            'cancel_url' => url('/subscriptions'),
            'allow_promotion_codes' => true,
        ]);

        // Redirect directly to the Stripe Checkout page
        return redirect($session->url);
//            ->with('message', 'Thank you for purchasing a Denlie Design website. We are excited to begin working on this project with you and will contact you soon! You can reach Dennis anytime at 949-636-1444 or at customdenlie@gmail.com');
    }
}
