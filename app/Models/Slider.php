<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    public $table = 'sliders';

    protected $fillable = [
        'brand_type',
        'title',
        'description',
        'image',
        'button_link'
    ];
}
