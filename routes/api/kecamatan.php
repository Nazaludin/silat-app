<?php

use App\Http\Resources\KecamatanCollection;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/kecamatan', function (Request $request) {
    return new KecamatanCollection(Kecamatan::all());
});
Route::get('/kecamatan/{kode_provinsi}/{kode_kabupaten}/{kode_kecamatan}', function (string $kode_provinsi, string $kode_kabupaten, string $kode_kecamatan) {
    return new KecamatanCollection(Kecamatan::where('kode_provinsi', $kode_provinsi)::where('kode_kabupaten', $kode_kabupaten)::where('kode_kecamatan', $kode_kecamatan)->get());
});
Route::get('/kecamatan/search/{kode_provinsi}/{kode_kabupaten}/{search}', function (string $kode_provinsi, string $kode_kabupaten, string $search) {
    $kecamatan = Kecamatan::where('kode_provinsi', $kode_provinsi)
        ->where('kode_kabupaten', $kode_kabupaten)
        ->where('kecamatan', 'like', '%' . $search . '%')
        ->get();

    return new KecamatanCollection($kecamatan);
});
