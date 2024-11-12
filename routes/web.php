<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KonsumenController;

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
    return view('history_order');
});
Route::get('/t', function () {
    return view('transaksi_order');
});

Route::get('/template', function(){
    return view('layouts.try');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register_proses');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

    Route::group(['middleware' => 'role:Admin'], function(){
        Route::get('/konsumen', [LoginController::class, 'konsumen'])->name('konsumen');
        Route::get('/transaksi', [LoginController::class, 'transaksi'])->name('transaksi');
        Route::group(['prefix' => 'layanan', 'as' => 'layanan.'], function(){
            Route::get('/index', [LayananController::class, 'index'])->name('index');
            Route::get('/create', [LayananController::class, 'create'])->name('create');
            Route::post('/store', [LayananController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [LayananController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [LayananController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [LayananController::class, 'delete'])->name('delete');
        });
        Route::group(['prefix' => 'pembayaran', 'as' => 'pembayaran.'], function(){
            Route::get('/index', [PembayaranController::class, 'index'])->name('index');
            Route::get('/create', [PembayaranController::class, 'create'])->name('create');
            Route::post('/store', [PembayaranController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PembayaranController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [PembayaranController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [PembayaranController::class, 'delete'])->name('delete');
        });
        Route::group(['prefix' => 'petugas', 'as' => 'petugas.'], function(){
            Route::get('/index', [PetugasController::class, 'index'])->name('index');
            Route::get('/create', [PetugasController::class, 'create'])->name('create');
            Route::post('/store', [PetugasController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PetugasController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [PetugasController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [PetugasController::class, 'delete'])->name('delete');
        });
        Route::group(['prefix' => 'pakaian', 'as' => 'pakaian.'], function(){
            Route::get('/index', [PakaianController::class, 'index'])->name('index');
            Route::get('/create', [PakaianController::class, 'create'])->name('create');
            Route::post('/store', [PakaianController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PakaianController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [PakaianController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [PakaianController::class, 'delete'])->name('delete');
        });
        
        Route::group(['prefix' => 'konsumen', 'as' => 'konsumen.'], function(){
            Route::get('/index', [KonsumenController::class, 'index'])->name('index');
            Route::get('/create', [KonsumenController::class, 'create'])->name('create');
            Route::post('/store', [KonsumenController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [KonsumenController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [KonsumenController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [KonsumenController::class, 'delete'])->name('delete');
        });
        Route::post('transaksi/detail/create', [TransaksiDetailController::class, 'create'])->name('create');
        Route::get('transaksi/detail/delete', [TransaksiDetailController::class, 'delete']);
        Route::get('transaksi/detail/selesai/{id}', [TransaksiDetailController::class, 'done']);
        Route::get('/order', [TransaksiController::class, 'order'])->name('order');
        Route::get('/edit/{id}', [TransaksiController::class, 'edit']);
        Route::get('/fix/{id}', [TransaksiController::class, 'fix'])->name('fix');
        Route::put('/update/{id}', [TransaksiController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [TransaksiController::class, 'delete'])->name('delete');
        Route::get('/index', [TransaksiController::class, 'index'])->name('index');
        Route::post('/store', [TransaksiController::class, 'store'])->name('store');
    });

    Route::group(['middleware' => 'role:Petugas'], function(){
        Route::get('/transaksi', [LoginController::class, 'transaksi'])->name('transaksi');
        Route::group(['prefix' => 'petugas', 'as' => 'petugas.'], function(){
            Route::get('/index', [PetugasController::class, 'index'])->name('index');
            Route::get('/create', [PetugasController::class, 'create'])->name('create');
            Route::post('/store', [PetugasController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PetugasController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [PetugasController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [PetugasController::class, 'delete'])->name('delete');
        });
    });
});


