<?php

use App\Http\Controllers\PerguruanController;
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
Route::prefix('admin')->middleware('role:admin')->group(function () {
    // Route::get('/users', function () {
    //     // Matches The "/admin/users" URL
    // });
    Route::get('/dashboard', [PerguruanController::class, 'create'])
        ->name('dashboard');
    Route::post('/perguruan/store', [PerguruanController::class, 'store'])
        ->name('perguruan.store');
});
