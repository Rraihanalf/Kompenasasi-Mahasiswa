<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\Pengawas;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::get('/', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('/logout', 'logout');
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:1']], function(){
        // Route::resource('admin', Admin::class);
        Route::controller(Admin::class)->group(function(){
            Route::get('admin', 'index')->name('admin');
            Route::get('showsiswa', 'showsiswa');
            Route::get('/admin/pelaksanaan', 'pelaksanaan');
            Route::get('daftar_user', 'showuser');
            Route::get('datakompen', 'datakompen');
            Route::get('showsiswa/detail/{nim}', 'detail');
            Route::post('showsiswa/create', 'store_pelaksanaan');
            Route::put('validasi/admin/{id_pelaksanaan}', 'validasi_admin');
        });
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function(){
        // Route::resource('/pengawas', Pengawas::class);
        Route::controller(Pengawas::class)->group(function(){
            Route::get('/pengawas', 'index')->name('pengawas');
            Route::get('/pengawas/pelaksanaan', 'dft_pelaksanaan');
            Route::get('/pengawas/pelaksanaan/detail/{id_pelaksanaan}', 'detail');
            Route::put('/validasi/pengawas/{id_pelaksanaan}', 'validasi_pengawas');
        });
    });

    Route::group(['middleware' => ['cekUserLogin:3']], function(){
        // Route::resource('mahasiswa', Mahasiswa::class);
        Route::controller(Mahasiswa::class)->group(function(){
            Route::get('/mahasiswa', 'index')->name('pengawas');
            Route::get('/mahasiswa/pelaksanaan', 'dft_pelaksanaan');
        });
    });
});
