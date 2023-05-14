<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
//     return view('index');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/dashboard/forum', [DashboardController::class, 'forum']);
Route::get('/dashboard/pendaftaran-mbkm', [DashboardController::class, 'pendaftaranMBKM']);
Route::get('/dashboard/upload-kurikulum', [DashboardController::class, 'uploadKurikulum']);
Route::get('/dashboard/hasil-konversi', [DashboardController::class, 'hasilKonversi']);
Route::get('/dashboard/loogbook', [DashboardController::class, 'loogbook']);
Route::get('/dashboard/laporan', [DashboardController::class, 'laporan']);

