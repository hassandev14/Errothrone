<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['name'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'attribute_category', 'attribute_id', 'category_id');
    }
}
