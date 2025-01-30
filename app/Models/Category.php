<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];
    public function brands()
    {
        return $this->hasMany(Brand::class, 'category_id');  // The second argument is the foreign key in the brands table
    }
    public function products()
    {
        return $this->hasMany(Product::class); // A category has many products
    }
}
