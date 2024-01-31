<?php

namespace Database\Seeders;

use App\Models\Kirim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KirimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kirim::create([
            'namaPaket' => 'siCepat',
            'hargaPaket' => 5000
        ]);
        Kirim::create([
            'namaPaket' => 'JNT',
            'hargaPaket' => 12000
        ]);
        Kirim::create([
            'namaPaket' => 'Anter Aja',
            'hargaPaket' => 15000
        ]);
        Kirim::create([
            'namaPaket' => 'JNE',
            'hargaPaket' => 8000
        ]);
        Kirim::create([
            'namaPaket' => 'Ninja Express',
            'hargaPaket' => 7000
        ]);
    }
}
