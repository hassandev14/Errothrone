<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_reurn extends Model
{
    protected $table = 'order_returns';

    // Define relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class);  // Assuming each order belongs to one customer
    }

    public function product()
    {
        return $this->belongsTo(Product::class);  // Assuming each order has one product
    }
}
