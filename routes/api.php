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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/provinsi/{kode_provinsi}', function (string $kode_provinsi) {
    return new ProvinsiCollection(Provinsi::where('kode_provinsi', $kode_provinsi)->get());
});
