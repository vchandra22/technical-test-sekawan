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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('merek')->nullable();
            $table->string('nopol')->nullable();
            $table->string('bahan_bakar')->nullable();
            $table->string('nama_driver')->nullable();
            $table->enum('jenis', ['barang', 'penumpang'])->nullable();
            $table->enum('status', ['tersedia', 'dipesan', 'dipakai', 'servis'])->default('tersedia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
