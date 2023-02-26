<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    public $table = 'product_details';

    protected $fillable = [
        'product_id',
        'sku',
        'name',
        'image',
        'discount_price',
        'price',
        'weight',
        'width',
        'length',
        'height',
        'status'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function gifts()
    {
        return $this->hasMany(Gift::class);
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
