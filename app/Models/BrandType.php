<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandType extends Model
{
    use HasFactory;
    public $table = 'brand_types';

    protected $fillable = [
        'brand_id',
        'name',
        'slug'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
