<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin-view.create-produk', [
            'daftarKategori' => Kategori::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'namaProduk' => ['required'],
            'beratProduk' => ['required'],
            'tanggalProduksi' => ['required'],
            'hargaProduk' => ['required'],
            'kategoriProduk' => ['required']
        ]);

        Produk::create([
            'namaProduk' => $request->namaProduk,
            'beratProduk' => $request->beratProduk,
            'tanggalProduksi' => $request->tanggalProduksi,
            'hargaProduk' => $request->hargaProduk,
            'kategori_id' => $request->kategoriProduk
        ]);
        return redirect()->route('main-page-admin');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $idProduk)
    {
        return view('admin-view.edit-produk', [
            'dataProduk' => Produk::with(relations: 'kategori')->find($idProduk),
            'daftarKategori' => Kategori::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idProduk){ 

        Produk::find($idProduk)->update([
            'namaProduk' => $request->namaProduk,
            'beratProduk' => $request->beratProduk,
            'tanggalProduksi' => $request->tanggalProduksi,
            'hargaProduk' => $request->hargaProduk,
            'kategori_id' => $request->kategoriProduk 
        ]);

        return redirect()->route('main-page-admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idProduk){
        Produk::destroy($idProduk);
        return redirect()->route('main-page-admin');
    }
}
