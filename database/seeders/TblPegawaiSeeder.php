<?php

namespace Database\Seeders;

use App\Models\TblPegawai;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TblPegawai::create(
            [
                'NIP' => '11234',
                'Nama' => 'Arini Nikita',
                'Alamat' => 'Jl. Dedali Putih 5A Tangerang',
                'Tanggal_lahir' => Carbon::createFromFormat('d-M-y', '02-Jan-88')->format('Y-m-d'),
                'Kode_divisi' => 'S1'
            ]
        );

        TblPegawai::create(
            [
                'NIP' => '11235',
                'Nama' => 'Toni Purana',
                'Alamat' => 'Jl. Temenggung 21B Jakarta Selatan',
                'Tanggal_lahir' => Carbon::createFromFormat('d-M-y', '04-Apr-83')->format('Y-m-d'),
                'Kode_divisi' => 'S2'
            ],
        );

        TblPegawai::create(
            [
                'NIP' => '11236',
                'Nama' => 'Gigih Prayitno',
                'Alamat' => 'Jl. Sidopekso 65 Bandung',
                'Tanggal_lahir' => Carbon::createFromFormat('d-M-y', '08-Nov-85')->format('Y-m-d'),
                'Kode_divisi' => 'S3'
            ],
        );

        TblPegawai::create(
            [
                'NIP' => '11237',
                'Nama' => 'Hilda Rahmawati',
                'Alamat' => 'Jl. Mendut 12 Bogor',
                'Tanggal_lahir' => Carbon::createFromFormat('d-M-y', '01-Nov-86')->format('Y-m-d'),
                'Kode_divisi' => 'S2'
            ],
        );
        TblPegawai::create(
            [
                'NIP' => '11238',
                'Nama' => 'Miftachul Fauzan',
                'Alamat' => 'Jl. Borobudur 1 Bogor',
                'Tanggal_lahir' => Carbon::createFromFormat('d-M-y', '05-Sep-84')->format('Y-m-d'),
                'Kode_divisi' => 'S1'
            ],
        );
        TblPegawai::create(
            [
                'NIP' => '11239',
                'Nama' => 'Katrilia Tirta',
                'Alamat' => 'Jl. Kenanga 21 Jakarta Timur',
                'Tanggal_lahir' => Carbon::createFromFormat('d-M-y', '05-Jul-84')->format('Y-m-d'),
                'Kode_divisi' => 'S1'
            ]
        );
    }
}
