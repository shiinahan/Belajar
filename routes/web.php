<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\menuBaruController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\menuPesananController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\uangMasukController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/', [homeController::class, 'index']);
Route::get('/search', [searchController::class, 'index'])->name('search');

Route::controller(menuController::class)->group(function () {
    Route::get('/menu', 'index');

    Route::get('/checkout/{id}', 'create');
    Route::post('/checkout/{id}', 'store');

    // Route::post('/menu', 'create');
});
Route::controller(aboutController::class)->group(function () {
    Route::get('/about', 'index');
    Route::post('/orders', 'store');
});

Route::get('/login', [authController::class, 'index'])->name('login');
Route::post('/login', [authController::class, 'proses_login']);


Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [authController::class, 'logout']);
    Route::controller(pesananController::class)->group(function () {
        Route::get('/pesanan', 'index');
        // Route::post('/pesanan', 'store');
    });
    Route::controller(menuBaruController::class)->group(function () {
        Route::get('/list-menu', 'index');

        Route::get('/list-menu/add', 'create');
        Route::post('/list-menu/add', 'store');

        Route::get('/list-menu/edit/{id}', 'edit');
        Route::post('/list-menu/edit/{id}', 'update');

        Route::get('/list-menu/{id}', 'destroy');
    });

    Route::controller(kategoriController::class)->group(function () {
        Route::get('/kategori', 'index');

        Route::get('/kategori/add', 'create');
        Route::post('/kategori/add', 'store');

        Route::get('/kategori/edit/{id}', 'edit');
        Route::post('/kategori/edit/{id}', 'update');
        Route::get('/kategori/{id}', 'destroy');
    });
    Route::controller(pelangganController::class)->group(function () {
        Route::get('/pelanggan', 'index');
        Route::get('/pelanggan/export/excel', 'export');

        // Route::post('/pelanggan', 'store');
    });
    Route::controller(menuPesananController::class)->group(function () {
        Route::get('/menu-pesanan', 'index');
        // Route::post('/menu-pesanan', 'store');
    });
    Route::controller(uangMasukController::class)->group(function () {
        Route::get('/uang-masuk', 'index');
        Route::get('/uang-masuk/export/excel', 'export');
        // Route::post('/uang-masuk', 'store');
    });

});
