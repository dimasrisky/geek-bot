<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kirim extends Model
{
    use HasFactory;
    protected $table = 'kirim';
    protected $fillable = [
        'namaPaket',
        'hargaPaket'
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
