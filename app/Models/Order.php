<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'status',
        'customer_id',  // Ensure you're using 'customer_id' as the correct foreign key.
    ];

    // An order belongs to a customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');  // Correct foreign key
    }

    // An order has one payment
    public function payment()
    {
        return $this->hasOne(Payment::class, 'order_id');  // 'order_id' is the foreign key in the payments table
    }
}

