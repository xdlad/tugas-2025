<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();   
            $table->string('plat_nomor')->unique();
            $table->string('nama_pemilik');
            $table->string('merk');
            $table->string('warna');
            $table->integer('tahun_kendaraan');
            $table->enum('jenis_kendaraan', ['motor', 'mobil']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
