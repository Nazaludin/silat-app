<?php

use App\Http\Resources\ProvinsiCollection;
use App\Models\Provinsi;
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

Route::get('/provinsi', function (Request $request) {
    return new ProvinsiCollection(Provinsi::all());
});
Route::get('/provinsi/{kode_provinsi}', function (string $kode_provinsi) {
    return new ProvinsiCollection(Provinsi::where('kode_provinsi', $kode_provinsi)->get());
});
Route::get('/provinsi/search/{search}', function ($search) {
    $provinsi = Provinsi::where('provinsi', 'like', '%' . $search . '%')->get();
    return new ProvinsiCollection($provinsi);
});
