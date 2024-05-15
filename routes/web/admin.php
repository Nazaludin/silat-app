<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\UserController;
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

Route::prefix('admin')->middleware('role:admin')->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/admin/user/index');
    })->name('admin.dashboard');;


    // USER ROUTE
    Route::prefix('user')->group(function () {
        Route::get('/index', [UserController::class, 'index'])
            ->name('admin.user.index');
        Route::put('/update/{id}', [UserController::class, 'update'])
            ->name('admin.user.update');
        Route::put('/accept/{id}', [UserController::class, 'accept'])
            ->name('admin.user.accept');
        Route::put('/ban/{id}', [UserController::class, 'ban'])
            ->name('admin.user.ban');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])
            ->name('admin.user.destroy');
    });
    // BERITA ROUTE
    Route::prefix('berita')->group(function () {
        Route::get('/index', [BeritaController::class, 'index'])
            ->name('admin.berita.index');
        Route::get('/add', [BeritaController::class, 'create'])
            ->name('admin.berita.add');
        Route::post('/store', [BeritaController::class, 'store'])
            ->name('admin.berita.store');
        Route::get('/edit/{id}', [BeritaController::class, 'edit'])
            ->name('admin.berita.edit');
        Route::put('/update/{id}', [BeritaController::class, 'update'])
            ->name('admin.berita.update');
        Route::delete('/destroy/{id}', [BeritaController::class, 'destroy'])
            ->name('admin.berita.destroy');

        Route::post('/accept/{id}', [BeritaController::class, 'accept'])
            ->name('admin.berita.accept');
        Route::post('/reject/{id}', [BeritaController::class, 'reject'])
            ->name('admin.berita.reject');
        Route::post('/revisi/{id}', [BeritaController::class, 'revisi'])
            ->name('admin.berita.revisi');
    });
});
