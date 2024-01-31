<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $casts = [
        'tanggalProduksi' => 'date'
    ];
    protected $fillable = [
        'namaProduk',
        'beratProduk',
        'tanggalProduksi',
        'hargaProduk',
        'kategori_id'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function detailsOrder(){
        return $this->hasMany(OrderDetail::class);
    }
}
