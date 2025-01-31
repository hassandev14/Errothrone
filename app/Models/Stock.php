<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function product()
    {
        return $this->hasOne(Product::class, 'product_id');  // 'product_id' is the foreign key in the payments table
    }
}
