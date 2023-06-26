<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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

Route::middleware(['guest'])->group(function (){
    Route::get('/', [LoginController::class, 'index']);
    Route::post('/', [LoginController::class, 'login']);
    });
    Route::get('/home',function(){
        return redirect('/admin');
    });
    
    Route::get('/admin',[AdminController::class, 'index']);
    Route::get('/admin',[AdminController::class, 'admin']);
    Route::get('/pengawas',[AdminController::class, 'pengawas']);
    Route::get('/mahasiswa',[AdminController::class, 'mahasiswa']);
    Route::get('/logout',[LoginController::class,'logout']);
