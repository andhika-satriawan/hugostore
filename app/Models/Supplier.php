<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public $table = 'suppliers';

    protected $fillable = [
        'name',
        'slug',
        'phone',
        'address'
    ];

    public function purchase_order()
    {
        return $this->hasMany(PurchaseOrder::class);
    }
}
