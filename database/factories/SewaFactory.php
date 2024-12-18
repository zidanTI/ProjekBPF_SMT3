<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Fasilitas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sewa>
 */
class SewaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_customer' => Customer::factory(), // Menggunakan factory untuk id_customer
            'id_fasilitas' => Fasilitas::factory(), // Menggunakan factory untuk id_fasilitas
            'tanggal_acara' => $this->faker->date(),
            'bukti_pembayaran' => $this->faker->imageUrl(),
            'nama_acara' => $this->faker->sentence(),
        ];
    }
}
