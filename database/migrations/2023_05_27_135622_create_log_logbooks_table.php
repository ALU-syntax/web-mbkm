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
        Schema::create('log_logbooks', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->text('body');
            $table->date('tanggal_dibuat');
            $table->string('lokasi');
            $table->string('logbook');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_logbooks');
    }
};
