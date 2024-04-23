<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display the cart and its items for the authenticated user.
     */
    public function showCart()
    {
        // Assuming each user has one cart
        $cartItems = optional(Auth::user()->cart)->items ?? collect();

        return view('cart', compact('cartItems'));
    }

    /**
     * Add an item to the cart.
     */
    public function addItem(Request $request)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Ensure the user has a cart, create one if not
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        // Create a new cart item
        $cartItem = CartItem::create([
            'cart_id' => $cart->id,
            'product_name' => $request->input('product_name'),
            'stripe_price_id' => $request->input('stripe_price_id'),
            'quantity' => $request->input('quantity', 1), // Default to 1 if not provided
        ]);

        // Redirect back with a success message
        return redirect()->route('cart.show')->with('success', 'Item added to cart.');
    }

    // You can add more methods as needed for removing items, updating quantities, etc.
}
