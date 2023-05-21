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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/auth/pnj', [LoginController::class, 'redirectToSSOPNJ']);
Route::get('/cb', [LoginController::class, 'callback']);

Route::get('/dashboard/index', [DashboardController::class, 'welcome']);

Route::get('/dashboard/', [LoginController::class, 'callback']);

Route::resource('/dashboard/forums', ForumController::class)->middleware('auth');
// Route::get('/dashboard/forums', [ForumController::class,'page']);
// Route::get('/forum', [ForumController::class,'page']);
// Route::get('/page', [ForumController::class,'page'])->middleware('auth');


Route::get('/dashboard/pendaftaran-mbkm', [DashboardController::class, 'pendaftaranMBKM'])->middleware('auth');
Route::get('/dashboard/upload-kurikulum', [DashboardController::class, 'uploadKurikulum'])->middleware('auth');
Route::get('/dashboard/hasil-konversi', [DashboardController::class, 'hasilKonversi'])->middleware('auth');

// Route::get('/dashboard/logbook', [DashboardController::class, 'loogbook']);
Route::resource('/dashboard/logbook', LogbookController::class)->middleware('auth');
// Route::get('/dashboard/logbook/create', [DashboardController::class, 'createLogbook']);

Route::get('/dashboard/laporan', [DashboardController::class, 'laporan'])->middleware('auth');


