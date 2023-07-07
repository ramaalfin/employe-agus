<?php

namespace App\Http\Controllers;

use App\Models\TblPresensi;
use App\Http\Requests\StoreTblPresensiRequest;
use App\Http\Requests\UpdateTblPresensiRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TblPresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $startDate = Carbon::parse('2018-01-01')->startOfMonth();
        $endDate = Carbon::parse('2018-01-31')->endOfMonth();
        $presensi_januari = DB::table('tbl_presensis')
            ->select('NIP', DB::raw('COUNT(*) as total_presensi'))
            ->whereBetween('Tanggal', [$startDate, $endDate])
            ->groupBy('NIP')
            ->count();
        $pegawai_belum_presensi = DB::table('tbl_pegawais')
            ->leftJoin('tbl_presensis', function ($join) {
                $join->on('tbl_pegawais.NIP', '=', 'tbl_presensis.NIP')
                    ->whereRaw("DATE_FORMAT(tbl_presensis.Tanggal, '%Y-%m') = '2018-01'");
            })
            ->whereNull('tbl_presensis.NIP')
            ->get();
        return view('presensi.index', [
            'presensis' => TblPresensi::orderBy('created_at')->get(),
            'presensi_januari' => $presensi_januari,
            'pegawai_belum_presensi' => $pegawai_belum_presensi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTblPresensiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TblPresensi $tblPresensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TblPresensi $tblPresensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTblPresensiRequest $request, TblPresensi $tblPresensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TblPresensi $tblPresensi)
    {
        //
    }
}
