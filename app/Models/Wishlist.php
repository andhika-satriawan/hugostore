<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    public $table = 'wishlists';

    protected $fillable = [
        'customer_id',
        'product_id',
        'product_detail_id'
    ];
}
