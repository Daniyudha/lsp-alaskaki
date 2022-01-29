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
Route::get('/form-pendaftaran', [\App\Http\Controllers\HomeController::class, 'form_pendaftaran']);
Route::get('/fungsi-dan-tujuan', [\App\Http\Controllers\HomeController::class, 'fungsi_tujuan']);
Route::get('/galeri', [\App\Http\Controllers\HomeController::class, 'galeri']);
