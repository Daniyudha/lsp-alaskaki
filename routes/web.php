<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrantController;
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
Route::get('/', [HomeController::class, 'index'])->name('root');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/asesor', [HomeController::class, 'asesor']);
Route::get('/syarat-dan-ketentuan', [HomeController::class, 'faq']);
Route::get('/dokumentasi', [HomeController::class, 'dokumentasi']);
Route::get('/form-pendaftaran', [HomeController::class, 'form_pendaftaran'])
	->name('form-pendaftaran');
Route::get('/fungsi-dan-tujuan', [HomeController::class, 'fungsi_tujuan']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/struktur-organisasi', [HomeController::class, 'struktur_organisasi']);
Route::get('/visi-dan-misi', [HomeController::class, 'visi_misi']);
Route::get('/latar-belakang', [HomeController::class, 'latar_belakang']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::post('/kontak-send-message', [HomeController::class, 'kontak_post'])->name('contact.post');
Route::get('/peserta', [HomeController::class, 'peserta']);
Route::get('/skema', [HomeController::class, 'skema']);
Route::get('/tempat', [HomeController::class, 'tempat']);
Route::get('/pemegang', [HomeController::class, 'pemegang']);
Route::get('/laporan', [HomeController::class, 'laporan']);
Route::get('/upload', [HomeController::class, 'upload']);
Route::get('/artikel', [HomeController::class, 'artikel'])->name('home.article');
Route::get('/artikel-detail/{slug}', [HomeController::class, 'artikel_detail'])->name('home.article-detail');

Route::post('/form-pendaftaran-post', [HomeController::class, 'form_pendaftaran_post'])
	->name('form-pendaftaran-post');

Route::get('/login', [AuthController::class, 'login'])->name('login')
	->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')
	->middleware('auth');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post')
	->middleware('guest');

Route::prefix('dashboard')->middleware('auth')->group(function (){
	Route::resource('news', '\App\Http\Controllers\ArticleController');

	Route::resource('gallery', '\App\Http\Controllers\PhotoController');

	Route::get('/', [AdminController::class, 'index'])->name('dashboard.admin');
	Route::get('/registrant', [RegistrantController::class, 'index'])->name('registrant.index');
	Route::get('/registrant/{registrant}/edit', [RegistrantController::class, 'edit'])->name('registrant.edit');
	Route::put('/registrant/{registrant}/edit', [RegistrantController::class, 'update'])->name('registrant.update');
	Route::delete('/registrant/{registrant}/delete', [RegistrantController::class, 'destroy'])->name('registrant.destroy');
	Route::put('/registrant/{registrant}/update-status', [RegistrantController::class, 'updateStatusRegistrant'])
		->name('admin.registrant-update-status');

	Route::get('export-registrants', [\App\Http\Controllers\ExportController::class, 'exportRegistrant'])
		->name('export.registrants-view');
	Route::post('export-registrants', [\App\Http\Controllers\ExportController::class, 'exportDataRegistrant'])
		->name('export.registrants-post');
	Route::post('export-registrants-all', [\App\Http\Controllers\ExportController::class, 'exportDataRegistrantAll'])
		->name('export.registrants-all-post');
});
