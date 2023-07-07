<?php

namespace App\Http\Controllers;

use App\Models\TblDivisi;
use App\Http\Requests\StoreTblDivisiRequest;
use App\Http\Requests\UpdateTblDivisiRequest;
use Illuminate\Support\Facades\DB;

class TblDivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawaiPerDivisi = DB::table('tbl_pegawais')
                            ->select('Kode_divisi', DB::raw('COUNT(*) as total_pegawai'))
                            ->groupBy('Kode_divisi')
                            ->get();
        return view('divisi.index', [
            'divisis' => TblDivisi::orderBy('created_at')->get(),
            'pegawaiPerDivisi' => $pegawaiPerDivisi
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
    public function store(StoreTblDivisiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TblDivisi $tblDivisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TblDivisi $tblDivisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTblDivisiRequest $request, TblDivisi $tblDivisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TblDivisi $tblDivisi)
    {
        //
    }
}
