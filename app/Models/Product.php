<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'products';

    protected $fillable = [
        'product_subcategory_id',
        'brand_type_id',
        'name',
        'slug',
        'description',
        'photo',
        'status'
    ];

    public function product_subcategory()
    {
        return $this->belongsTo(ProductSubcategory::class, 'product_subcategory_id', 'id');
    }

    public function brand_type()
    {
        return $this->belongsTo(BrandType::class, 'brand_type_id', 'id');
    }

    public function product_details()
    {
        return $this->hasMany(ProductDetail::class);
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function gifts()
    {
        return $this->hasMany(Gift::class);
    }

    public function purchase_order()
    {
        return $this->hasMany(PurchaseOrder::class);
    }

    public function sale_details()
    {
        return $this->hasMany(SaleDetail::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}
