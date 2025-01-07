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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id('id_booking');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_fasilitas');
            $table->date('tanggal_acara');
            $table->string('nama_acara');
            $table->string('status_pembayaran')->default('Belum Dibayar');
            $table->boolean('notifikasi_wa')->default(false);
            $table->timestamps();

            $table->foreign('id_customer')->references('id_customer')->on('customers')->onDelete('cascade');
            $table->foreign('id_fasilitas')->references('id_fasilitas')->on('fasilitas')->onDelete('cascade');
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
