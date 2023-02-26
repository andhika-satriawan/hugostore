<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public $table = 'sales';

    protected $fillable = [
        'customer_id',
        'transaction_code',
        'address',
        'total_price',
        'shipping_price',
        'total',
        'shipping_status',
        'recipient_name',
        'recipient_phone',
        'shipping',
        'shipping_type',
        'resi',
        'payment_url',
        'payment_token',
        'transaction_status',
        'transaction_source'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function sale_details()
    {
        return $this->hasMany(SaleDetail::class);
    }
}
