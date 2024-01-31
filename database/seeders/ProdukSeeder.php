<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'namaProduk' => 'Arduino',
            'beratProduk' => 1,
            'tanggalProduksi' => '2012-3-3',
            'hargaProduk' => 120000,
            'kategori_id' => 2
        ]);
        Produk::create([
            'namaProduk' => 'Mv35',
            'beratProduk' => 1,
            'tanggalProduksi' => '2001-5-29',
            'hargaProduk' => 35000,
            'kategori_id' => 5
        ]);
        Produk::create([
            'namaProduk' => 'Exp8266',
            'beratProduk' => 1,
            'tanggalProduksi' => '2005-3-3',
            'hargaProduk' => 55000,
            'kategori_id' => 1
        ]);
        Produk::create([
            'namaProduk' => 'Waspberry',
            'beratProduk' => 1,
            'tanggalProduksi' => '2005-3-3',
            'hargaProduk' => 350000,
            'kategori_id' => 2
        ]);
        Produk::create([
            'namaProduk' => 'Push Button',
            'beratProduk' => 2,
            'tanggalProduksi' => '1956-3-19',
            'hargaProduk' => 500,
            'kategori_id' => 1
        ]);
        Produk::create([
            'namaProduk' => 'Solder',
            'beratProduk' => 2,
            'tanggalProduksi' => '2005-3-3',
            'hargaProduk' => 10000,
            'kategori_id' => 3
        ]);
    }
}
