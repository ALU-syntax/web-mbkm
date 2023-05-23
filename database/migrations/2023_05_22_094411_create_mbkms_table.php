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
        Schema::create('mbkms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nim');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('semester');
            $table->string('program');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('tempat_program_perusahaan');
            $table->string('lokasi_program');
            $table->string('program_keberapa');
            $table->string('status')->default('Dalam Pengecekan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbkms');
    }
};