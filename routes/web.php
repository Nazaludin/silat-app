<?php

use App\Http\Controllers\FunctionalController;
use App\Http\Controllers\Perguruan\PerguruanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WilayahController;
use App\Models\Perguruan;
use App\Models\Tokoh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/dashboard/sejarah', function () {
//     return view('sejarah');
// });
// Route::get('/dashboard/prestasi', function () {
//     return view('prestasi');
// });
// Route::get('/dashboard/tokoh', function () {
//     return view('tokoh');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('view-image/{filename}',   [FunctionalController::class, 'viewImage'])->name('view-image');

Route::get('perguruanView', function () {
    return view('perguruanView');
})->name('perguruanView');
// Route::get('dashboard/sejarah', function () {
//     return view('sejarah');
// })->name('sejarah');
// Route::get('dashboard/prestasi', function () {
//     return view('prestasi');
// })->name('prestasi');

// Route::get('dashboard/tokoh', function () {
//     return view('adminpg.tokoh.tokoh');
// })->name('tokoh');

Route::get('/wilayah', function () {
    return view('wilayah');
})->name('wilayah');
Route::get('/wilayah/tambah', [WilayahController::class, 'tambahData'])->name('wilayah.tambah');

// Route::get('/dashboard', [PerguruanController::class, 'create'])
//     ->name('dashboard');
// Route::post('/perguruan/store', [PerguruanController::class, 'store'])
//     ->name('perguruan.store');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/perguruan/full-view/{id_perguruan}', function (Request $request, $id_perguruan) {
    $perguruan = Perguruan::where('id_perguruan', $id_perguruan)->firstOrFail();
    $guru_besar = Tokoh::where('id_perguruan', $id_perguruan)->where('tipe', 'Guru Besar')->get()->toArray();
    $tokoh_lain = Tokoh::where('id_perguruan', $id_perguruan)->whereNotIn('tipe', ['Guru Besar'])->get()->toArray();

    $exist = false;
    if ($perguruan && $perguruan->nama !== null && $perguruan->nama !== '') {
        $exist = true;
    }
    return view('perguruan-fullview', compact('exist', 'perguruan', 'guru_besar', 'tokoh_lain'));
})->name('perguruan.fullview');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

$routes = glob(__DIR__ . "/web/*.php");
foreach ($routes as $route) require($route);

require __DIR__ . '/auth.php';
