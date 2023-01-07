<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public $table = 'brands';

    protected $fillable = [
        'name',
        'slug',
        'image'
    ];

    public function brand_types()
    {
        return $this->hasMany(BrandType::class);
    }
}
