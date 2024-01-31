<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'namaKategori' => 'Component',
        ]);
        Kategori::create([
            'namaKategori' => 'Board',
        ]);
        Kategori::create([
            'namaKategori' => 'Tool',
        ]);
        Kategori::create([
            'namaKategori' => 'Cable',
        ]);
        Kategori::create([
            'namaKategori' => 'Sensor',
        ]);
    }
}
