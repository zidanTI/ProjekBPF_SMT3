<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'nama' => 'John Doe',
                'alamat' => 'Jl. Melati No. 1',
                'no_hp' => '628123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jane Smith',
                'alamat' => 'Jl. Mawar No. 2',
                'no_hp' => '628987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Michael Brown',
                'alamat' => 'Jl. Anggrek No. 3',
                'no_hp' => '628111111111',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Emily Davis',
                'alamat' => 'Jl. Kenanga No. 4',
                'no_hp' => '628222222222',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'David Wilson',
                'alamat' => 'Jl. Dahlia No. 5',
                'no_hp' => '628333333333',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
