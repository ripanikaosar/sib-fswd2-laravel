<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        // Customer::create([
        //     'nama' => 'agil',
        //     'email'=> 'agil@gmail.com',
        //     'alamat'=> 'Jakarta',
        // ]);
        // Customer::create([
        //     'nama' => 'damar',
        //     'email'=> 'damar@gmail.com',
        //     'alamat'=> 'Bandung',
        // ]);

        Customer::factory()->count(10)->create();
    }
}
