<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        'jumlahBarang',
        'totalHarga',
        'order_id',
        'produk_id'
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function produk(){
        return $this->belongsTo(Produk::class);
    }
}
