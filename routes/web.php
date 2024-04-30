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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/survey', [App\Http\Controllers\SurveyController::class, 'index'])->name('survey.index');
Route::get('/survey/create', [App\Http\Controllers\SurveyController::class, 'create'])->name('survey.create');
Route::post('/survey/store', [App\Http\Controllers\SurveyController::class, 'store'])->name('survey.store');
Route::get('/survey/edit', [App\Http\Controllers\SurveyController::class, 'edit'])->name('survey.edit');
Route::post('/survey/update', [App\Http\Controllers\SurveyController::class, 'update'])->name('survey.update');
Route::get('/survey/delete', [App\Http\Controllers\SurveyController::class, 'index'])->name('survey.update');
Route::get('/survey/get-list', [App\Http\Controllers\SurveyController::class, 'get_list'])->name('survey.get_list');
