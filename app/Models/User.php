<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spark\Billable;
use Stripe\StripeClient;

class User extends Authenticatable
{
    use Billable, HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // In User.php
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    protected $stripe;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->stripe = new StripeClient(env('STRIPE_SECRET'));
    }

    // Fetch charges for one-time purchases
    public function fetchStripeCharges()
    {
        $charges = $this->stripe->charges->all(['customer' => $this->stripe_id]);
        return $charges->data;
    }

    // Fetch the latest invoice for subscriptions
    public function fetchLatestInvoice()
    {
        $invoices = $this->stripe->invoices->all(['customer' => $this->stripe_id, 'limit' => 1]);
        return $invoices->data[0] ?? null;
    }

}
