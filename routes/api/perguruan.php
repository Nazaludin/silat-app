<?php

use App\Http\Resources\KabupatenCollection;
use App\Models\Perguruan;
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

Route::get('/perguruan', function (Request $request) {
    $perguruans = Perguruan::paginate(15);

    return response()->json($perguruans);
});
