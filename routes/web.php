<?php

use App\Http\Controllers\TblDivisiController;
use App\Http\Controllers\TblPegawaiController;
use App\Http\Controllers\TblPresensiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::resource('divisi', TblDivisiController::class);
Route::resource('pegawai', TblPegawaiController::class);
Route::resource('presensi', TblPresensiController::class);
