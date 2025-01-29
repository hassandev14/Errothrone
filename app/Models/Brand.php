<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'desc',
        'image_name',
    
    ];
    // Brand.php
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');  // The second argument is the foreign key
    }
}
