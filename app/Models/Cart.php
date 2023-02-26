<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table = 'carts';

    protected $fillable = [
        'customer_id',
        'product_id',
        'product_detail_id',
        'quantity'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function product_detail()
    {
        return $this->belongsTo(ProductDetail::class, 'product_detail_id', 'id');
    }
}
