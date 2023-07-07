<?php

namespace Database\Seeders;

use App\Models\TblDivisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblDivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TblDivisi::create(
            [
                'Kode_divisi' => 'S1',
                'Nama_divisi' => 'Gudang',
                'Pimpinan_divisi' => 'Beni Permana, SE',
            ]
        );

        TblDivisi::create(
            [
                'Kode_divisi' => 'S2',
                'Nama_divisi' => 'Produksi',
                'Pimpinan_divisi' => 'Syaiful Bachri, ST',
            ]
        );

        TblDivisi::create(
            [
                'Kode_divisi' => 'S3',
                'Nama_divisi' => 'HRD',
                'Pimpinan_divisi' => 'Dr. Anggit Darmawan',
            ]
        );
    }
}
