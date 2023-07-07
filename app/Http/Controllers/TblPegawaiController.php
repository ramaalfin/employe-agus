<?php

namespace App\Http\Controllers;

use App\Models\TblPegawai;
use App\Http\Requests\StoreTblPegawaiRequest;
use App\Http\Requests\UpdateTblPegawaiRequest;
use Illuminate\Support\Facades\DB;

class TblPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai_november = DB::table('tbl_pegawais')
            ->whereMonth('tanggal_lahir', '=', 11) // Filter berdasarkan bulan (11 = November)
            ->get();

        $pegawai_bogor = DB::table('tbl_pegawais')
            ->where('Alamat', 'LIKE', '%Bogor%')
            ->get();

        return view('pegawai.index', [
            'pegawais' => TblPegawai::orderBy('created_at')->get(),
            'pegawai_november' => $pegawai_november,
            'pegawai_bogor' => $pegawai_bogor
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
    public function store(StoreTblPegawaiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TblPegawai $tblPegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TblPegawai $tblPegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTblPegawaiRequest $request, TblPegawai $tblPegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TblPegawai $tblPegawai)
    {
        //
    }
}
