<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;
    public $table = 'gifts';

    protected $fillable = [
        'recipient_name',
        'recipient_phone',
        'product_name',
        'product_id',
        'product_detail_id',
        'purchase_price',
        'price',
        'address'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function product_detail()
    {
        return $this->belongsTo(ProductDetail::class, 'product_detail_id', 'id');
    }
}
