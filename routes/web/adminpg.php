<?php

use App\Http\Controllers\PerguruanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\TokohController;
use App\Http\Resources\ProvinsiCollection;
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
Route::prefix('adminpg')->group(function () {
    Route::get('/dashboard', [PerguruanController::class, 'create'])
        ->name('dashboard');
    Route::post('/perguruan/store', [PerguruanController::class, 'store'])
        ->name('perguruan.store');

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
