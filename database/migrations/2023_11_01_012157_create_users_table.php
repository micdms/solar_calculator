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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->text('provinsi_id');
            $table->text('provinsi');
            $table->text('kota_id');
            $table->text('kota');
            $table->text('kode_pos');
            $table->text('alamat');
            $table->text('telephone');
            $table->text('email');
            $table->text('status');
            $table->text('token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
