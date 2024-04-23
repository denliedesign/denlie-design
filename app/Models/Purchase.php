<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

//    protected $fillable = ['user_id', 'description', 'quantity', 'amount', 'purchase_date'];


    /**
     * Get the user that made the purchase.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
