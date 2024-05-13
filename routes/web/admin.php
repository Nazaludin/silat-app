<?php

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
    // USER ROUTE
    Route::get('/user', [UserController::class, 'index'])
        ->name('admin.user.index');
    Route::prefix('user')->group(function () {
        Route::get('/add', [UserController::class, 'create'])
            ->name('admin.user.add');
        Route::post('/store', [UserController::class, 'store'])
            ->name('admin.user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])
            ->name('admin.user.edit');
        Route::put('/update/{id}', [UserController::class, 'update'])
            ->name('admin.user.update');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])
            ->name('admin.user.destroy');
    });
});
