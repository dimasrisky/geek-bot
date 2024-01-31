<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin-view.management', [
            'dataProduk' => Produk::with(relations: 'kategori')->get(),
            'daftarKategori' => Kategori::get()
        ]);
    }
}
