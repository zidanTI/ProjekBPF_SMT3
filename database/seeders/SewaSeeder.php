<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sewa')->insert([
            [
                'id_customer' => 1,
                'id_fasilitas' => 1,
                'tanggal_acara' => '2025-01-10',
                'nama_acara' => 'Pernikahan John',
                'status_pembayaran' => 'Belum Dibayar',
                'notifikasi_wa' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_customer' => 2,
                'id_fasilitas' => 2,
                'tanggal_acara' => '2025-02-15',
                'nama_acara' => 'Ulang Tahun Jane',
                'status_pembayaran' => 'Sudah Dibayar',
                'notifikasi_wa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_customer' => 3,
                'id_fasilitas' => 3,
                'tanggal_acara' => '2025-03-20',
                'nama_acara' => 'Konser Michael',
                'status_pembayaran' => 'Belum Dibayar',
                'notifikasi_wa' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_customer' => 4,
                'id_fasilitas' => 4,
                'tanggal_acara' => '2025-04-25',
                'nama_acara' => 'Pesta Emily',
                'status_pembayaran' => 'Sudah Dibayar',
                'notifikasi_wa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_customer' => 5,
                'id_fasilitas' => 5,
                'tanggal_acara' => '2025-05-30',
                'nama_acara' => 'Seminar David',
                'status_pembayaran' => 'Belum Dibayar',
                'notifikasi_wa' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
