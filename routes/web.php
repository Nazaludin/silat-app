<?php

use App\Http\Controllers\PerguruanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WilayahController;

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
});

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
Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');
Route::get('/wilayah', function () {
    return view('wilayah');
})->name('wilayah');
Route::get('/wilayah/tambah', [WilayahController::class, 'tambahData'])->name('wilayah.tambah');

Route::get('/dashboard', [PerguruanController::class, 'create'])
    ->name('dashboard');
Route::post('/perguruan/store', [PerguruanController::class, 'store'])
    ->name('perguruan.store');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
