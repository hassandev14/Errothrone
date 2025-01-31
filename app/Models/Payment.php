<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'payment_method',
        'status',
        'payment_date',
        'transaction_id',
        'amount',
    ];

    // A payment belongs to one order (fix the relationship here)
    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');  // 'order_id' is the foreign key in the payments table
    }
}

