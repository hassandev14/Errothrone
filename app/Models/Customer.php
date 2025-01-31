<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Correct relationship with Orders
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');  // The second argument is the foreign key in the orders table
    }

    // Correct relationship with Cart
    public function cart()
    {
        return $this->hasMany(Cart::class, 'customer_id');  // The second argument is the foreign key in the carts table
    }
    public function order_return()
    {
        return $this->hasMany(Order_reurn::class);  // Each customer can have multiple orders
    }
}
