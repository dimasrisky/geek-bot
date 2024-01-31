<?php

namespace App\Http\Controllers;

use App\Models\Kirim;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index', [
            'dataProduk' => Produk::with('kategori')->get(),
            'dataKirim' => Kirim::get()
        ]);
    }
}
