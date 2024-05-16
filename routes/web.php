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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Universal
Route::get('/survey/get-list', [App\Http\Controllers\SurveyController::class, 'get_list'])->name('survey.get_list');
Route::get('/dokumen/get-list/{kategori}', [App\Http\Controllers\DokumenController::class, 'get_list'])->name('dokumen.get_list');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/survey', [App\Http\Controllers\SurveyController::class, 'index'])->name('survey.index');
Route::get('/survey/create', [App\Http\Controllers\SurveyController::class, 'create'])->name('survey.create');
Route::post('/survey/store', [App\Http\Controllers\SurveyController::class, 'store'])->name('survey.store');
Route::get('/survey/edit/{id}', [App\Http\Controllers\SurveyController::class, 'edit'])->name('survey.edit');
Route::post('/survey/update/{id}', [App\Http\Controllers\SurveyController::class, 'update'])->name('survey.update');
Route::delete('/survey/delete/{id}', [App\Http\Controllers\SurveyController::class, 'delete'])->name('survey.delete');

Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/edit/{id}', [App\Http\Controllers\ProfilController::class, 'edit'])->name('profil.edit');
Route::post('/profil/update/{id}', [App\Http\Controllers\ProfilController::class, 'update'])->name('profil.update');
Route::get('/profil/{menu}', [App\Http\Controllers\ProfilController::class, 'getDetail'])->name('profil.detail');

Route::get('/dokumen', [App\Http\Controllers\DokumenController::class, 'index'])->name('dokumen.index');
Route::get('/dokumen/create', [App\Http\Controllers\DokumenController::class, 'create'])->name('dokumen.create');
Route::post('/dokumen/store', [App\Http\Controllers\DokumenController::class, 'store'])->name('dokumen.store');
Route::get('/dokumen/edit/{id}', [App\Http\Controllers\DokumenController::class, 'edit'])->name('dokumen.edit');
Route::post('/dokumen/update/{id}', [App\Http\Controllers\DokumenController::class, 'update'])->name('dokumen.update');
Route::delete('/dokumen/delete/{id}', [App\Http\Controllers\DokumenController::class, 'delete'])->name('dokumen.delete');

Route::get('/akreditasi', [App\Http\Controllers\AkreditasiController::class, 'index'])->name('akreditasi.index');
Route::get('/akreditasi/create', [App\Http\Controllers\AkreditasiController::class, 'create'])->name('akreditasi.create');
Route::post('/akreditasi/store', [App\Http\Controllers\AkreditasiController::class, 'store'])->name('akreditasi.store');
Route::get('/akreditasi/edit/{id}', [App\Http\Controllers\AkreditasiController::class, 'edit'])->name('akreditasi.edit');
Route::post('/akreditasi/update/{id}', [App\Http\Controllers\AkreditasiController::class, 'update'])->name('akreditasi.update');
Route::delete('/akreditasi/delete/{id}', [App\Http\Controllers\AkreditasiController::class, 'delete'])->name('akreditasi.delete');

Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita/store', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/edit/{id}', [App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
Route::post('/berita/update/{id}', [App\Http\Controllers\BeritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/delete/{id}', [App\Http\Controllers\BeritaController::class, 'delete'])->name('berita.delete');
Route::get('/berita/list', [App\Http\Controllers\BeritaController::class, 'list'])->name('berita.list');
Route::get('/berita/detail/{id}', [App\Http\Controllers\BeritaController::class, 'detail'])->name('berita.detail');