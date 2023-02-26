<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    public $table = 'product_categories';

    protected $fillable = [
        'name',
        'slug'
    ];

    public function product_subcategories()
    {
        return $this->hasMany(ProductSubcategory::class);
    }
}
