<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;

class Customer extends Model
{
    use HasFactory, Notifiable, Authenticatable;
    protected $table = 'customers';
    protected $fillable = [
        'nama',
        'alamat',
        'noHp',
        'password',
        'email'
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}