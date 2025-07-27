<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'plat_nomor',
        'nama_pemilik',
        'merk',
        'warna',
        'tahun_kendaraan',
        'jenis_kendaraan',
    ];
}
