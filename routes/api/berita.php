<?php

use App\Helpers\PerguruanHelper;
use App\Http\Resources\KabupatenCollection;
use App\Models\Berita;
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

Route::get('/berita', function (Request $request) {
    $berita = Berita::orderBy('updated_at', 'desc')->paginate(15);

    return response()->json($berita);
});
Route::prefix('admin')->group(function () {
    Route::get('/prestasi', function (Request $request) {
        $prestasi = Prestasi::paginate(15);

        return response()->json($prestasi);
    });
});
Route::prefix('adminpg')->group(function () {
    // Route::get('/prestasi', function (Request $request) {
    //     $prestasi = Prestasi::where('id_perguruan',  PerguruanHelper::id())->paginate(1);
    //     return response()->json($prestasi);
    // });
    Route::get('/berita', function (Request $request) {
        $key = $request->input('search');

        // Jika query tidak ada atau kosong, tampilkan semua data
        if (!$key) {
            $berita = Berita::where('id_perguruan', PerguruanHelper::id())->paginate(1);
        } else {
            $berita = Berita::where('id_perguruan', PerguruanHelper::id())
                ->where('judul', 'like', "%$key%")
                ->paginate(1);
        }
        // Mengubah format tanggal 'created_at' dari setiap berita
        foreach ($berita as $item) {
            $item->tanggal = $item->getTanggal();
        }
        return response()->json($berita);
    });
});
