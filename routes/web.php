<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangkeluarController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\LaporanpeminjamanController;
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

Route::get('/', function () {
<<<<<<< HEAD
    return view('auth.login');
=======
    return view('welcome');
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
});

Auth::routes(
    [
        'register' => true,
    ]
);
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    route::get('/', function () {
        return view('layouts.admin');
    });

    // <!-- Route::get('/home', function(){
    //     return view ('home');
    // }); -->

    Route::resource('barangmasuk', BarangmasukController::class);
     Route::resource('barang', BarangController::class);
     Route::resource('barangkeluar', BarangkeluarController::class);
    Route::resource('peminjaman', PeminjamanController::class);
     Route::resource('pengembalian', PengembalianController::class);
<<<<<<< HEAD
    Route::get('laporanpeminjaman', [LaporanpeminjamanController::class, 'index'])->name('laporanpeminjaman.index');
    Route::post('laporanpeminjaman', [LaporanpeminjamanController::class, 'index']);

});


=======
Route::get('laporanpeminjaman', [LaporanpeminjamanController::class, 'index'])->name('laporanpeminjaman.index');
Route::post('laporanpeminjaman', [LaporanpeminjamanController::class, 'index']);
});
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
