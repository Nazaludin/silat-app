<?php

use App\Helpers\PerguruanHelper;
use App\Http\Resources\KabupatenCollection;
use App\Models\Perguruan;
use App\Models\Prestasi;
use App\Models\Tokoh;
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
    Route::get('/tokoh', function (Request $request) {
        $tokoh = Tokoh::paginate(15);

        return response()->json($tokoh);
    });
});
Route::prefix('adminpg')->group(function () {
    Route::get('/tokoh', function (Request $request) {
        $key = $request->input('search');

        // Jika query tidak ada atau kosong, tampilkan semua data
        if (!$key) {
            $tokoh = Tokoh::where('id_perguruan', PerguruanHelper::id())->paginate(12);
        } else {
            // Jika query ada, lakukan pencarian berdasarkan judul
            $tokoh = Tokoh::where('id_perguruan', PerguruanHelper::id())
                ->where('nama', 'like', "%$key%")
                ->paginate(12);
        }

        return response()->json($tokoh);
    });
    Route::get('/tokoh/{id_tokoh}', function (Request $request, $id_tokoh) {
        $tokoh = Tokoh::where('id_tokoh', $id_tokoh)->first();
        return response()->json($tokoh);
    });
});
