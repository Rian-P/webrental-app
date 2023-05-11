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
        Schema::create('data_pemesanan', function (Blueprint $table) {
            $table->id('id_pemesanan');
            $table->string('nama_pelanggan');
            $table->string('nama_kendaraan');
            $table->string('kota_tujuan');
            $table->string('tanggal_pengambilan');
            $table->string('tanggal_pengembalian');
            $table->string('sopir');
            $table->string('waktu_pengambilan');
            $table->string('waktu_pengembalian');
            $table->string('foto_ktp')->nullable();
            $table->string('bukti_tf')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pemesanan');
    }
};
