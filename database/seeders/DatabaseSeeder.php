<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('password123'), // Password hashed
        ]);
        // \App\Models\Customer::factory(10)->create();
        // \App\Models\Fasilitas::factory(6)->create();
        // \App\Models\Sewa::factory(10)->create();
        $this->call([
            CustomerSeeder::class,
            FasilitasSeeder::class,
            SewaSeeder::class,
        ]);
        
    }
}
