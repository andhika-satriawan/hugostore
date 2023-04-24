<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubcategory extends Model
{
    use HasFactory;
    public $table = 'product_subcategories';

    protected $fillable = [
        'product_category_id',
        'name',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
