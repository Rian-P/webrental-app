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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id('id_mobil');
            $table->string('nama_kendaraan');
            $table->string('type');
            $table->string('nopol');
            $table->string('tahun');
            $table->string('deskripsi_mobil');
            $table->string('image')->nullable();
            $table->string('harga');
            $table->timestamps();




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
