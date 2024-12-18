<?php

namespace Database\Seeders;

use App\Models\Sewa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sewa::factory()->count(10)->create(); // Mengisi 10 data sewa
    }
}
