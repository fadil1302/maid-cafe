<?php

use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;

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


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/dologin', [LoginController::class, 'dologin'])->name('dologin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', [LandController::class, 'index'])->name('landing');

Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'], function(){

    Route::get('/dashboard', [PegawaiController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [PegawaiController::class, 'total'])->name('dashboard');
    Route::get('/pegawai', [PegawaiController::class, 'pegawai'])->name('pegawai');
    Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');
});
