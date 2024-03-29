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
        Schema::create('sopir', function (Blueprint $table) {
            $table->id('id_sopir');
            $table->string('nama_sopir');
            $table->string('nomor_hp_sopir');
            $table->string('alamat_sopir');
            $table->string('status');
            $table->string('gender');
            $table->string('password');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sopir');
    }
};
