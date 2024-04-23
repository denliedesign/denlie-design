<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['cart_id', 'product_name', 'stripe_price_id', 'quantity'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
