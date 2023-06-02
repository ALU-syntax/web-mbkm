<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MbkmController;
use App\Http\Controllers\HasilKonversiController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\RoleController;
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

// Forum Route
Route::resource('/dashboard/forum', ForumController::class)->middleware('auth');
Route::get('/dashboard/mypost', [ForumController::class, 'myPost'])->middleware('auth');
Route::post('/dashboard/mypost/{id}', [ForumController::class, 'deleted'])->middleware('auth');

// Mbkm Route
Route::get('/dashboard/informasi-mbkm', [DashboardController::class, 'pendaftaranMBKM'])->middleware('auth');
Route::get('/dashboard/informasi-mbkm/personal', [MbkmController::class, 'myForm'])->middleware('auth');
Route::get('/dashboard/informasi-mbkm/{id}', [MbkmController::class, 'editMyForm'])->middleware('auth');
Route::post('/dashboard/informasi-mbkm/create', [MbkmController::class, 'store'])->middleware('auth');
Route::post('/dashboard/informasi-mbkm/{id}/edit', [MbkmController::class, 'updateMyForm'])->middleware('auth');

// Upload Kurikulum Route
Route::get('/dashboard/upload-kurikulum', [DashboardController::class, 'uploadKurikulum'])->middleware('auth');
Route::post('/dashboard/upload-kurikulum', [KurikulumController::class, 'store'])->middleware('auth');

// Hasil Konversi Route
Route::get('/dashboard/hasil-konversi', [DashboardController::class, 'hasilKonversi'])->middleware('auth');
Route::get('/dashboard/hasil-konversi/{id}', [HasilKonversiController::class, 'index'])->middleware('auth');

// Logbook Route
Route::get('/dashboard/logbook/{id}/detail', [LogbookController::class, 'detail'])->middleware('auth');
Route::get('/dashboard/logbook/create/{id}', [LogbookController::class, 'create'])->middleware('auth');
Route::get('/dashboard/logbook/{id}', [LogbookController::class, 'myLogbook'])->middleware('auth');
Route::get('/dashboard/logbook', [LogbookController::class, 'index'])->middleware('auth');
Route::get('/dashboard/logbook/{id}/edit', [LogbookController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/logbook/create', [LogbookController::class, 'store'])->middleware('auth');
Route::post('/dashboard/logbook/{id}/update', [LogbookController::class, 'update'])->middleware('auth');
Route::post('/dashboard/logbook/{id}/delete', [LogbookController::class, 'destroy'])->middleware('auth');

// Laporan Route
Route::get('/dashboard/laporan', [DashboardController::class, 'laporan'])->middleware('auth');
Route::get('/dashboard/laporan/{id}', [LaporanController::class, 'index'])->middleware('auth');

// Register Route
Route::get('/dashboard/register', [RegisterController::class, 'index'])->middleware('auth');
Route::get('/dashboard/register/kelola-akun', [RegisterController::class, 'kelolaAkun'])->middleware('auth');
Route::post('/dashboard/register', [RegisterController::class, 'store'])->middleware('auth');

//Fakultas Route
Route::get('/dashboard/fakultas', [FakultasController::class , 'index'])->middleware('auth');
Route::get('/dashboard/fakultas/create', [FakultasController::class, 'create'])->middleware('auth');
Route::get('/dashboard/fakultas/{id}', [FakultasController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/fakultas', [FakultasController::class, 'store'])->middleware('auth');
Route::post('/dashboard/fakultas/{id}/delete', [FakultasController::class, 'destroy'])->middleware('auth');
Route::post('/dashboard/fakultas/{id}/edit', [FakultasController::class, 'update'])->middleware('auth');

// Jurusan Route
Route::get('/dashboard/jurusan', [JurusanController::class, 'index'])->middleware('auth');
Route::get('/dashboard/jurusan/create', [JurusanController::class, 'create'])->middleware('auth');
Route::get('/dashboard/jurusan/{id}', [JurusanController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/jurusan', [JurusanController::class, 'store'])->middleware('auth');
Route::post('/dashboard/jurusan/{id}/delete', [JurusanController::class, 'destroy'])->middleware('auth');
Route::post('/dashboard/jurusan/{id}/edit', [JurusanController::class, 'update'])->middleware('auth');

// Role Route
Route::get('/dashboard/role', [RoleController::class, 'index'])->middleware('auth');
Route::get('/dashboard/role/create', [RoleController::class, 'create'])->middleware('auth');
Route::post('/dashboard/role', [RoleController::class, 'store'])->middleware('auth');
Route::get('/dashboard/role/{id}', [RoleController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/role/{id}/edit', [RoleController::class, 'update'])->middleware('auth');

// ProgramMBKM Route
Route::get('/dashboard/program-mbkm', [MbkmController::class, 'programIndex'])->middleware('auth');
Route::get('/dashboard/program-mbkm/create', [MbkmController::class, 'create'])->middleware('auth');
Route::get('/dashboard/program-mbkm/{id}', [MbkmController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/program-mbkm', [MbkmController::class, 'storeProgram'])->middleware('auth');
Route::post('/dashboard/program-mbkm/{id}/edit', [MbkmController::class, 'update'])->middleware('auth');

// Utility Route
Route::post('/api/fetch-jurusan', [DashboardController::class, 'fetchJurusan']);
Route::get('/pdf/view', [LaporanController::class, 'viewPdf'])->middleware('auth');



