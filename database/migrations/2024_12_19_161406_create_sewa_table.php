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
            $table->string('bukti_pembayaran');
            $table->string('nama_acara');
            $table->boolean('dp')->default(0); // Status DP: 0 - Belum DP, 1 - Sudah DP
            $table->timestamps();
        
            // Foreign Key untuk customer dengan cascade delete dan update
            $table->foreign('id_customer')
                ->references('id_customer')->on('customers')
                ->onDelete('cascade')  // Jika data customer dihapus, data sewa juga ikut terhapus
                ->onUpdate('cascade'); // Jika data customer diupdate, data sewa juga ikut terupdate
        
            // Foreign Key untuk fasilitas dengan cascade delete dan update
            $table->foreign('id_fasilitas')
                ->references('id_fasilitas')->on('fasilitas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};
