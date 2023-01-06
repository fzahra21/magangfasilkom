<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoPeluangController;
use Faker\Factory as Faker;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';

Route::get('/', [PublicController::class, 'index']);
Route::get('/infopeluang', [PublicController::class, 'infopeluang']);
Route::get('/bimbingan', [PublicController::class, 'bimbingan']);

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::controller(BimbinganController::class)->group(function () {
        Route::get('/bimbingan', 'index');
        Route::get('/bimbingan-create', 'create');
        Route::post('/bimbingan-create', 'save');
        Route::get('/bimbingan/{id}', 'show');
        Route::post('/bimbingan-create/{id}', 'update');
        Route::get('/bimbingan-delete/{id}', 'delete');
    }
    );

    Route::controller(InfoPeluangController::class)->group(function () {
        Route::get('/infopeluang', 'index');
        Route::get('/infopeluang-create', 'create');
        Route::post('/infopeluang-create', 'save');
        Route::get('/infopeluang/{id}', 'show');
        Route::post('/infopeluang-create/{id}', 'update');
        Route::get('/infopeluang-delete/{id}', 'delete');
    }
    );
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/infopeluang', [App\Http\Controllers\InfoMagangController::class, 'index']);