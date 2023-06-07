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
        Schema::create('s_s_o_logins', function (Blueprint $table) {
            $table->id();
            $table->string('sso_user');
            $table->string('role');
            $table->string('role_kedua')->nullable();
            $table->string('fakultas_id');
            $table->string('jurusan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_s_o_logins');
    }
};
