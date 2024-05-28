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
    // Get input values
    $provinsi = $request->input('provinsi');
    $aliran = $request->input('aliran');
    $nama = $request->input('nama');

    // Start the query
    $query = Perguruan::query();

    // Add conditions based on the inputs
    if ($provinsi) {
        $query->where('provinsi', 'like', "%$provinsi%");
    }
    if ($aliran) {
        $query->where('aliran', 'like', "%$aliran%");
    }
    if ($nama) {
        $query->where('nama', 'like', "%$nama%");
    }

    // Execute the query and paginate results
    $perguruans = $query->whereNotNull('nama')->paginate(4);

    return response()->json($perguruans);
});
