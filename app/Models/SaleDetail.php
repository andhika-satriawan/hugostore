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
}
