<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
    return view('welcome');
});

Route::controller(BarangController::class)->name('barang.')->prefix('halaman_pertama')->group(function () {
    Route::get('/','halaman_pertama')->name('halaman_pertama');    
});

Route::controller(BarangController::class)->name('barang.')->prefix('halaman_kedua')->group(function () {
    Route::get('/','halaman_kedua')->name('halaman_kedua');    
});
