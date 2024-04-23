<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // Specify the table if it's not the plural form of the model name
    // protected $table = 'carts';

    // Mass assignable attributes
    protected $fillable = ['user_id'];

    /**
     * Define the relationship between a cart and its items.
     * This allows you to access the items in a cart with $cart->items
     */
    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     * Define the inverse relationship between a cart and a user.
     * This allows accessing the user who owns a cart with $cart->user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
