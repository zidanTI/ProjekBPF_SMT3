<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fasilitas')->insert([
            [
                'nama_paket' => 'Paket 1',
                'harga' => 2200000.00,
                'deskripsi' => '1 ALBUM 10 SHEET
                                CETAK FOTO 4R SEBANYAK 120 LEMBAR
                                BONUS 2 FOTO UKURAN 16R DENGAN BINGKAI 12X16
                                ALL FILE DALAM GOOGLE DRIVE
                                FILE BEBAS JEPRETAN
                                2 HARI KERJA
                                DI LIPUT DENGAN 2 PHOTOGRAPHER
                                UNTUK BOKING TANGGAL SETELAH DEAL DAN DP
                                PELUNASAN SETELAH SELESAI ACARA
                                PRODUKSI DI LAKULAN SETELAH PELUNASAN
                                1 BULAN FOTO SELESAI DAN DI ANTAR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_paket' => 'Paket 2',
                'harga' => 2700000.00,
                'deskripsi' => '
                                1 ALBUM 15 SHEET BONUS TAS
                                CETAK FOTO 4R SEBANYAK 180 LEMBAR
                                BONUS 1 FOTO UKURAN 20R DENGAN BINGKAI 16X20
                                ALL FILE DALAM GOOGLE DRIVE
                                FILE BEBAS JEPRETAN
                                2 HARI KERJA
                                DI LIPUT DENGAN 2 PHOTOGRAPHER
                                UNTUK BOKING TANGGAL SESUDAH DP DAN PELUNASAN SETELAH ACARA SELESAL PRODUKSI DI LAKULAN SETELAH PELUNASAN I BULAN FOTO SELESAI DAN DI ANTAR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_paket' => 'Paket 3',
                'harga' => 3700000.00,
                'deskripsi' => 'FASILITAS
                                1 album books 20X20 isi 10 sheat/
                                Cetak foto 4R 80 lembar (khusus foto keluarga)
                                Bonus 20R dengan bingkai
                                2 hari kerja
                                penambahan hari kerja dikenakan biaya 300.000 perhari
                                PRODUKSI SETELAH PROSES PELUNASAN!!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_paket' => 'Paket VIP 1',
                'harga' => 4200000.00,
                'deskripsi' => 'ALBUM BOOKS 20X30 ISI 10 SHEET
                                CETAK FOTO 4R SEBANYAK 120 (KHUSUS KELUARGA)
                                BONUS 1 FOTO 20R DENGAN BINGKAI
                                BONUS 1 FOTO 16R DENGAN BINGKAI
                                KERJA 2 HARI
                                ALL FILE IN FLASDISCK
                                PRODUKSI SETELAH PELUNASAN
                                1BULAN FOTO SIAP DAN DI ANTAR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_paket' => 'Paket VIP 2',
                'harga' => 6000000.00,
                'deskripsi' => '1ALBUM BOOKS 20X30 ISI 10 SHEET (KHUSU MOMENT&POSE)
                                1 ALBUM BOOKS 20X20 ISI 10 SHEET
                                (KHUSUS KELUARGA)
                                BONUS 1 FOTO 20+R DENGAN BINGKAI
                                BONUS 1 FOTO 16R DENGAN BINGKAI
                                KERJA 2 HARI
                                ALL FILE IN FLASDISK
                                PRODUKSI SETELAH PELUNASAN
                                2BULAN FOTO SIAP DAN DIANTAR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
