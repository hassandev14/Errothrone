<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'brand_id',
        'description',
        'price',
        'image_name',
    
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');  // The second argument is the foreign key
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class); // Brand model will be related via brand_id 
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'product_id');  // The second argument is the foreign key
    }
    public function order_return()
    {
        return $this->hasMany(Order_reurn::class);  // Each customer can have multiple orders
    }
    public function stock()
    {
        return $this->belongsTo(Stock::class, 'stock_id');  // Correct foreign key
    }
}