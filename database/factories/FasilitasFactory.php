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
                'nama_paket' => $this->faker->word . ' Paket',
                'harga' => $this->faker->randomFloat(2, 1000000, 20000000),
                'deskripsi' => $this->faker->sentence,
        ];
    }
}
