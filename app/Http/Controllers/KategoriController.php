<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{


    public function create(){
        return view('admin-view.create-kategori');
    }
    public function store(Request $request){
        $request->validate([
            'namaKategori' => ['required']
        ]);

        Kategori::create([
            'namaKategori' => $request->namaKategori
        ]);

        return redirect()->route('main-page-admin');
    }

    public function destroy(string $idKategori){
        Kategori::destroy($idKategori);
        return redirect()->route('main-page-admin');
    }
}
