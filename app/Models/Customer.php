<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}
