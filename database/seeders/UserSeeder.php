<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Asep',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'asep@gmail.com',	
            'password' => bcrypt('asep123'),
            'role' => 'admin'
        ]);
        User::create([
            'nama' => 'anton',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'anton@gmail.com',	
            'password' => bcrypt('anton123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'dina',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'dina@gmail.com',	
            'password' => bcrypt('dina123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'melvin',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'melvin@gmail.com',	
            'password' => bcrypt('melvin123'),
            'role' => 'admin'
        ]);
        User::create([
            'nama' => 'rina',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'rina@gmail.com',	
            'password' => bcrypt('rina123'),
            'role' => 'custtomer'
        ]);
        User::create([
            'nama' => 'rian',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'rian@gmail.com',	
            'password' => bcrypt('rian123'),
            'role' => 'custtomer'
        ]);
        User::create([
            'nama' => 'rani',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'rani@gmail.com',	
            'password' => bcrypt('rani123'),
            'role' => 'custtomer'
        ]);
        User::create([
            'nama' => 'rain',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'rain@gmail.com',	
            'password' => bcrypt('rain123'),
            'role' => 'admin'
        ]);
        User::create([
            'nama' => 'tora',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'tora@gmail.com',	
            'password' => bcrypt('tora123'),
            'role' => 'admin'
        ]);
        User::create([
            'nama' => 'bika',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'bika@gmail.com',	
            'password' => bcrypt('bika123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'sandi',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'sandi@gmail.com',	
            'password' => bcrypt('sandi123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'dis',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'dis@gmail.com',	
            'password' => bcrypt('dis123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'simo',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'simo@gmail.com',	
            'password' => bcrypt('simo123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'sion',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'sion@gmail.com',	
            'password' => bcrypt('sion123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'vic',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'vic@gmail.com',	
            'password' => bcrypt('vic123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'viso',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'viso@gmail.com',	
            'password' => bcrypt('viso123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'kyo',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'kyo@gmail.com',	
            'password' => bcrypt('kyo123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'john',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'john@gmail.com',	
            'password' => bcrypt('john123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'doe',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'doe@gmail.com',	
            'password' => bcrypt('doe123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'patel',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'patel@gmail.com',	
            'password' => bcrypt('patel123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'cody',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'cody@gmail.com',	
            'password' => bcrypt('cody123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'yuo',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'yuo@gmail.com',	
            'password' => bcrypt('yuo123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'wir',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'wir@gmail.com',	
            'password' => bcrypt('wir123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'klop',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'klop@gmail.com',	
            'password' => bcrypt('klop123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'hide',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'hide@gmail.com',	
            'password' => bcrypt('hide123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'ray',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'ray@gmail.com',	
            'password' => bcrypt('ray123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'cas',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'cas@gmail.com',	
            'password' => bcrypt('cas123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'sous',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'sous@gmail.com',	
            'password' => bcrypt('sous123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'qwer',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'qwer@gmail.com',	
            'password' => bcrypt('qwer123'),
            'role' => 'customer'
        ]);
        User::create([
            'nama' => 'wrot',
            'alamat' => 'Malang',
            'noHp' => '2386443',
            'email' => 'wrot@gmail.com',	
            'password' => bcrypt('wrot123'),
            'role' => 'customer'
        ]);
    }
}
