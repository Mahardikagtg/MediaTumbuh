<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'username' => 'coba',
            'IDToko' => '2',
            'NamaAdmin' => 'coba',
            'password' => bcrypt('cobacoba123'),
            'JenisKelamin' => 'L',
            'AlamatAdmin' => 'banyuwangi',
            'noHP' => '081911663302'
            'level' => 'admin'
            'IsActive' => '1'
        ]
    }
}
