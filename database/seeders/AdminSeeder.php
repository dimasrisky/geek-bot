<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'email' => 'febian@gmail.com',
            'password' => bcrypt('febian123')
        ]);
        Admin::create([
            'email' => 'hasan@gmail.com',
            'password' => bcrypt('hasan123')
        ]);
        Admin::create([
            'email' => 'fikri@gmail.com',
            'password' => bcrypt('fikri123')
        ]);
    }
}
