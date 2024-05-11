<?php

use App\Helpers\PerguruanHelper;
use App\Http\Resources\KabupatenCollection;
use App\Models\Perguruan;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::prefix('admin')->group(function () {
    Route::get('/prestasi', function (Request $request) {
        $prestasi = Prestasi::paginate(15);

        return response()->json($prestasi);
    });
});
Route::prefix('adminpg')->group(function () {
    Route::get('/prestasi', function (Request $request) {
        $prestasi = Prestasi::where('id_perguruan',  PerguruanHelper::id())->paginate(15);
        return response()->json($prestasi);
    });
});
