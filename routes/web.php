<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/asesor', [\App\Http\Controllers\HomeController::class, 'asesor']);
Route::get('/syarat-dan-ketentuan', [\App\Http\Controllers\HomeController::class, 'faq']);
Route::get('/dokumentasi', [\App\Http\Controllers\HomeController::class, 'dokumentasi']);
Route::get('/form-pendaftaran', [\App\Http\Controllers\HomeController::class, 'form_pendaftaran'])
	->name('form-pendaftaran');
Route::get('/fungsi-dan-tujuan', [\App\Http\Controllers\HomeController::class, 'fungsi_tujuan']);
Route::get('/galeri', [\App\Http\Controllers\HomeController::class, 'galeri']);
Route::get('/struktur-organisasi', [\App\Http\Controllers\HomeController::class, 'struktur_organisasi']);
Route::get('/visi-dan-misi', [\App\Http\Controllers\HomeController::class, 'visi_misi']);
Route::get('/latarbelakang', [\App\Http\Controllers\HomeController::class, 'latar_belakang']);
Route::get('/kontak', [\App\Http\Controllers\HomeController::class, 'kontak']);
Route::get('/peserta', [\App\Http\Controllers\HomeController::class, 'peserta']);
Route::get('/skema', [\App\Http\Controllers\HomeController::class, 'skema']);
Route::get('/tempat', [\App\Http\Controllers\HomeController::class, 'tempat']);
Route::get('/pemegang', [\App\Http\Controllers\HomeController::class, 'pemegang']);
Route::get('/laporan', [\App\Http\Controllers\HomeController::class, 'laporan']);
Route::get('/upload', [\App\Http\Controllers\HomeController::class, 'upload']);
Route::get('/artikel', [\App\Http\Controllers\HomeController::class, 'artikel']);
Route::get('/artikel-detail', [\App\Http\Controllers\HomeController::class, 'artikel_detail']);

Route::post('/form-pendaftaran-post', [\App\Http\Controllers\HomeController::class, 'form_pendaftaran_post'])
	->name('form-pendaftaran-post');
