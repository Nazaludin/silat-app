<?php

use App\Helpers\PerguruanHelper;
use App\Http\Resources\KabupatenCollection;
use App\Models\Perguruan;
use App\Models\Prestasi;
use App\Models\User;
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
    Route::get('/user', function (Request $request) {
        $key = $request->input('search');

        // Jika query tidak ada atau kosong, tampilkan semua data
        if (!$key) {
            $pengguna = User::join('perguruan', 'perguruan.id_user', '=', 'users.id')
                ->select('users.*', 'perguruan.nama AS perguruan')
                ->whereNotIn('users.role', [1])
                ->paginate(1);
        } else {
            // Jika query ada, lakukan pencarian berdasarkan judul
            $pengguna = User::join('perguruan', 'perguruan.id_user', '=', 'users.id')
                ->select('users.*', 'perguruan.nama AS perguruan')
                ->where('name', 'like', "%$key%")
                ->paginate(1);
        }

        return response()->json($pengguna);
    });
});
