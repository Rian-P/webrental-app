<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\landing\HomeController;
use App\http\Controllers\landing\MobilController;
use App\http\Controllers\landing\DetailMobilController;
use App\http\Controllers\landing\TransaksiController;

//dashboard
use App\http\Controllers\Dashboard\IndexController;
use App\http\Controllers\Dashboard\DataUserController;
use App\http\Controllers\Dashboard\DataKendaraanController;




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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/pilihanmobil', [MobilController::class, 'index'])->name('mobil.index');
Route::get('/detail-mobil', [DetailMobilController::class, 'index'])->name('detail-mobil.index');


Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');


Route::get('/dashboard', [IndexController::class, 'index'])->name('index.index');
Route::get('/datauser', [DataUserController::class, 'index'])->name('datauser.index');
Route::get('/datakendaraan', [DataKendaraanController::class, 'index'])->name('datakendaraan.index');


