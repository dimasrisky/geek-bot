<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'orderDate',
        'idCustomer',
        'idKirim'
    ];
    protected $casts = [
        'orderDate' => 'date'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function kirim(){
        return $this->belongsTo(Kirim::class);
    }
}
