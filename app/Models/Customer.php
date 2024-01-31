<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
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
