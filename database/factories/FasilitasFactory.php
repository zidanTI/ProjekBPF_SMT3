<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fasilitas>
 */
class FasilitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_paket' => $this->faker->word,
            'harga' => $this->faker->randomFloat(2, 100000, 5000000), // Harga antara 100.000 dan 5.000.000
        ];
    }
}
