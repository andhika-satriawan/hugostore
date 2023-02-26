<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;
    public $table = 'sale_details';

    protected $fillable = [
        'sale_id',
        'product_id',
        'product_detail_id',
        'product_name',
        'variant',
        'serial_number',
        'quantity',
        'price',
        'sub_total',
        'warranty_no'
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
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
