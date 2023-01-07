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
}
