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
        'purchase_price',
        'price',
        'weight',
        'width',
        'length',
        'height',
        'status'
    ];
}
