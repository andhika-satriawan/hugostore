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
        'brand_type',
        'name',
        'slug',
        'description',
        'photo',
        'status'
    ];
}
