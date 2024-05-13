<?php

use App\Http\Controllers\Perguruan\BeritaController;
use App\Http\Controllers\Perguruan\PerguruanController;
use App\Http\Controllers\Perguruan\PrestasiController;
use App\Http\Controllers\Perguruan\TokohController;
use App\Http\Resources\ProvinsiCollection;
use App\Models\Perguruan;
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

Route::get('/provinsi', function (Request $request) {
    return new ProvinsiCollection(Provinsi::all());
});
Route::prefix('adminpg')->middleware('role:adminpg')->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/adminpg/perguruan/index');
    })->name('adminpg.dashboard');;

    // PERGURUAN
    Route::prefix('perguruan')->group(function () {
        Route::get('/index', [PerguruanController::class, 'index'])
            ->name('adminpg.perguruan.index');
        Route::get('/add', [PerguruanController::class, 'create'])
            ->name('adminpg.perguruan.add');
        Route::post('/store', [PerguruanController::class, 'store'])
            ->name('adminpg.perguruan.store');
        Route::get('/edit', [PerguruanController::class, 'edit'])
            ->name('adminpg.perguruan.edit');
        Route::put('/update', [PerguruanController::class, 'update'])
            ->name('adminpg.perguruan.update');
    });

    // SEJARAH
    Route::prefix('sejarah')->group(function () {
        Route::get('/index', [PerguruanController::class, 'createSejarah'])
            ->name('adminpg.sejarah.index');
        Route::post('/sejarah/store', [PerguruanController::class, 'storeSejarah'])
            ->name('adminpg.sejarah.store');
    });

    // PRESTASI ROUTE
    Route::get('/prestasi', [PrestasiController::class, 'index'])
        ->name('adminpg.prestasi.index');
    Route::prefix('prestasi')->group(function () {
        Route::get('/add', [PrestasiController::class, 'create'])
            ->name('adminpg.prestasi.add');
        Route::post('/store', [PrestasiController::class, 'store'])
            ->name('adminpg.prestasi.store');
        Route::get('/edit/{id}', [PrestasiController::class, 'edit'])
            ->name('adminpg.prestasi.edit');
        Route::put('/update/{id}', [PrestasiController::class, 'update'])
            ->name('adminpg.prestasi.update');
        Route::delete('/destroy/{id}', [PrestasiController::class, 'destroy'])
            ->name('adminpg.prestasi.destroy');
    });

    // BERITA ROUTE
    Route::get('/berita', [BeritaController::class, 'index'])
        ->name('adminpg.berita.index');
    Route::prefix('berita')->group(function () {
        Route::get('/add', [BeritaController::class, 'create'])
            ->name('adminpg.berita.add');
        Route::post('/store', [BeritaController::class, 'store'])
            ->name('adminpg.berita.store');
        Route::get('/edit/{id}', [BeritaController::class, 'edit'])
            ->name('adminpg.berita.edit');
        Route::put('/update/{id}', [BeritaController::class, 'update'])
            ->name('adminpg.berita.update');
        Route::delete('/destroy/{id}', [BeritaController::class, 'destroy'])
            ->name('adminpg.berita.destroy');
    });

    // TOKOH ROUTE
    Route::get('/tokoh', [TokohController::class, 'index'])
        ->name('adminpg.tokoh.index');
    Route::prefix('tokoh')->group(function () {
        Route::get('/add', [TokohController::class, 'create'])
            ->name('adminpg.tokoh.add');
        Route::post('/store', [TokohController::class, 'store'])
            ->name('adminpg.tokoh.store');
        Route::get('/edit/{id}', [TokohController::class, 'edit'])
            ->name('adminpg.tokoh.edit');
        Route::put('/update/{id}', [TokohController::class, 'update'])
            ->name('adminpg.tokoh.update');
        Route::delete('/destroy/{id}', [TokohController::class, 'destroy'])
            ->name('adminpg.tokoh.destroy');
    });
});
