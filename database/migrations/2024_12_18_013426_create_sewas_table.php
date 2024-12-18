<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sewas', function (Blueprint $table) {
            $table->id('id_booking');
            $table->foreignId('id_customer')->constrained('customers', 'id_customer'); // Merujuk ke id_customer
            $table->foreignId('id_fasilitas')->constrained('fasilitas', 'id_fasilitas'); // Merujuk ke id_fasilitas
            $table->date('tanggal_acara');
            $table->string('bukti_pembayaran');
            $table->string('nama_acara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
