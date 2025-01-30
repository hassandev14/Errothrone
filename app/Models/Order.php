<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'status',
        'user_id'
    
    ];
    // Brand.php
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');  // The second argument is the foreign key
    }
}
