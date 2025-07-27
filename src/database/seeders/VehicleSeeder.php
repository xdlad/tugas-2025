<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        Vehicle::create([
            'plat_nomor' => 'B1234XYZ',
            'nama_pemilik' => 'Andi',
            'merk' => 'Toyota',
            'warna' => 'Merah',
            'tahun_kendaraan' => 2020,
            'jenis_kendaraan' => 'mobil',
        ]);
    }
}
