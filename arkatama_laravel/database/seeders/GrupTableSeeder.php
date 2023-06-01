<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grup;

class GrupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grup::create([
            'nama_pengguna' => 'Tegar',
            'status' => 'Admin',   
        ]);
        Grup::create([
            'nama_pengguna' => 'Dika',
            'status' => 'Staff',   
        ]);
        Grup::create([
            'nama_pengguna' => 'Fajri',
            'status' => 'Staff',   
        ]);
        Grup::create([
            'nama_pengguna' => 'Bagas',
            'status' => 'Staff',   
        ]);
    }
}
