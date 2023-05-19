<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index']);
Route::get('/auth/pnj', [LoginController::class, 'redirectToSSOPNJ']);
Route::get('/cb', [LoginController::class, 'callback']);

Route::get('/dashboard/', [DashboardController::class, 'welcome']);

Route::resource('/dashboard/forum', ForumController::class);

Route::get('/dashboard/pendaftaran-mbkm', [DashboardController::class, 'pendaftaranMBKM']);
Route::get('/dashboard/upload-kurikulum', [DashboardController::class, 'uploadKurikulum']);
Route::get('/dashboard/hasil-konversi', [DashboardController::class, 'hasilKonversi']);

// Route::get('/dashboard/logbook', [DashboardController::class, 'loogbook']);
Route::resource('/dashboard/logbook', LogbookController::class);
// Route::get('/dashboard/logbook/create', [DashboardController::class, 'createLogbook']);

Route::get('/dashboard/laporan', [DashboardController::class, 'laporan']);


