<?php

use App\Http\Controllers\FunctionalController;
use App\Http\Controllers\Perguruan\PerguruanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WilayahController;
use App\Models\Berita;
use App\Models\Perguruan;
use App\Models\Prestasi;
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

Route::get('/wait/accept', function (Request $request) {
    return view('auth.wait-accept');
})->name('wait.accept');

// FUNCTIONAL ROUTE
Route::get('view-image/{filename}',   [FunctionalController::class, 'viewImage'])->name('view-image');
Route::get('/wilayah/tambah', [WilayahController::class, 'tambahData'])->name('wilayah.tambah');


// PERGURUAN
Route::get('/perguruan/full-view/{id_perguruan}', function (Request $request, $id_perguruan) {
    $perguruan = Perguruan::where('id_perguruan', $id_perguruan)->firstOrFail();
    $guru_besar = Tokoh::where('id_perguruan', $id_perguruan)->where('tipe', 'Guru Besar')->get()->toArray();
    $tokoh_lain = Tokoh::where('id_perguruan', $id_perguruan)->whereNotIn('tipe', ['Guru Besar'])->get()->toArray();
    $prestasi = Prestasi::where('id_perguruan', $id_perguruan)->get()->toArray();

    $exist = false;
    if ($perguruan && $perguruan->nama !== null && $perguruan->nama !== '') {
        $exist = true;
    }
    return view('perguruan-fullview', compact('exist', 'perguruan', 'guru_besar', 'tokoh_lain', 'prestasi'));
})->name('perguruan.fullview');

// BERITA
Route::get('/berita', function (Request $request) {
    return view('berita');
})->name('berita');
Route::get('/berita/read/{id_berita}', function (Request $request, $id_berita) {
    $berita = Berita::join('perguruan', 'perguruan.id_perguruan', '=', 'berita.id_perguruan')
        ->select('berita.*', 'perguruan.nama AS penulis')
        ->where('id_berita', $id_berita)
        ->firstOrFail();

    $berita->tanggal = $berita->getTanggal();

    return view('berita-read', compact('berita'));
})->name('berita.read');

// PRESTASI
Route::get('/perguruan/full-view/prestasi/{id_perguruan}', function (Request $request, $id_perguruan) {

    return view('prestasi', compact('id_perguruan'));
})->name('perguruan.fullview.prestasi');
Route::get('/prestasi/read/{id_prestasi}', function (Request $request, $id_prestasi) {
    $prestasi = Prestasi::join('perguruan', 'perguruan.id_perguruan', '=', 'prestasi.id_perguruan')
        ->select('prestasi.*', 'perguruan.nama AS penulis')
        ->where('id_prestasi', $id_prestasi)
        ->firstOrFail();

    $prestasi->tanggal = $prestasi->getTanggal();

    return view('prestasi-read', compact('prestasi'));
})->name('prestasi.read');

// AUTH
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

$routes = glob(__DIR__ . "/web/*.php");
foreach ($routes as $route) require($route);

require __DIR__ . '/auth.php';
