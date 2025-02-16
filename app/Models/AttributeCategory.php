<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeCategory extends Model
{
    use HasFactory;

    protected $table = 'attribute_category'; // Pivot Table

    protected $fillable = ['category_id', 'attribute_id', 'sort_order'];

    // ✅ Category ka relation (BelongsTo)
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    // ✅ Attribute ka relation (BelongsTo)
    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id', 'id');
    }

    // ✅ Subcategory ka relation (HasMany through Category)
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'category_id');
    }

    // ✅ Brand ka relation (HasMany through Category)
    public function brands()
    {
        return $this->hasMany(Brand::class, 'category_id', 'category_id');
    }
}
