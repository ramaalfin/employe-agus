<?php

namespace Database\Seeders;

use App\Models\TblPresensi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblPresensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TblPresensi::create([
            'Tanggal' => Carbon::createFromFormat('d-M-y', '02-Jan-18')->format('Y-m-d'),
            'NIP' => 11234,
            'Jam_masuk' => Carbon::createFromTime(8, 10),
            'Jam_pulang' => Carbon::createFromTime(17, 40)
        ]);

        TblPresensi::create([
            'Tanggal' => Carbon::createFromFormat('d-M-y', '02-Jan-18')->format('Y-m-d'),
            'NIP' => 11235,
            'Jam_masuk' => Carbon::createFromTime(8, 0),
            'Jam_pulang' => Carbon::createFromTime(17, 07)
        ]);

        TblPresensi::create([
            'Tanggal' => Carbon::createFromFormat('d-M-y', '02-Jan-18')->format('Y-m-d'),
            'NIP' => 11236,
            'Jam_masuk' => Carbon::createFromTime(7, 0),
            'Jam_pulang' => Carbon::createFromTime(16, 30)
        ]);

        TblPresensi::create([
            'Tanggal' => Carbon::createFromFormat('d-M-y', '03-Jan-18')->format('Y-m-d'),
            'NIP' => 11234,
            'Jam_masuk' => Carbon::createFromTime(7, 45),
            'Jam_pulang' => Carbon::createFromTime(16, 40)
        ]);

        TblPresensi::create([
            'Tanggal' => Carbon::createFromFormat('d-M-y', '03-Jan-18')->format('Y-m-d'),
            'NIP' => 11235,
            'Jam_masuk' => Carbon::createFromTime(7, 50),
            'Jam_pulang' => Carbon::createFromTime(16, 50)
        ]);

        TblPresensi::create([
            'Tanggal' => Carbon::createFromFormat('d-M-y', '04-Jan-18')->format('Y-m-d'),
            'NIP' => 11234,
            'Jam_masuk' => Carbon::createFromTime(7, 55),
            'Jam_pulang' => Carbon::createFromTime(17, 30)
        ]);

        TblPresensi::create([
            'Tanggal' => Carbon::createFromFormat('d-M-y', '05-Jan-18')->format('Y-m-d'),
            'NIP' => 11234,
            'Jam_masuk' => Carbon::createFromTime(7, 20),
            'Jam_pulang' => Carbon::createFromTime(16, 20)
        ]);
    }
}
