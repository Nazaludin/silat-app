<?php

use App\Http\Resources\KabupatenCollection;
use App\Models\Kabupaten;
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

Route::get('/kabupaten', function (Request $request) {
    return new KabupatenCollection(Kabupaten::all());
});
Route::get('/kabupaten/{kode_provinsi}/{kode_kabupaten}', function (string $kode_provinsi, string $kode_kabupaten) {
    return new KabupatenCollection(Kabupaten::where('kode_provinsi', $kode_provinsi)
        ->where('kode_kabupaten', $kode_kabupaten)
        ->get());
});
Route::get('/kabupaten/search/{kode_provinsi}/{search}', function (string $kode_provinsi, $search) {
    $kabupaten = Kabupaten::where('kode_provinsi', $kode_provinsi)
        ->where('kabupaten', 'like', '%' . $search . '%')
        ->get();

    return new KabupatenCollection($kabupaten);
});
