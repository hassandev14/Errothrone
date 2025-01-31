<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'customer_id',
        'product_id',
        'quantity',
        'price',
    ];

    // Correct relationship with Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');  // The second argument is the foreign key in the carts table
    }

    // Correct relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');  // The second argument is the foreign key in the carts table
    }
}

