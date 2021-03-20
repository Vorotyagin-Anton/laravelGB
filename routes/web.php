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
Route::get('/category/{category}', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category');

Route::get('/news/{news}', [\App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/allNews', [\App\Http\Controllers\NewsController::class, 'getAllNews'])->name('allNews');
Route::get('/deleteNews/{news}', [\App\Http\Controllers\NewsController::class, 'deleteNews'])->name('deleteNews');
Route::match(['post', 'get'],'/updateNews/{news}', [\App\Http\Controllers\NewsController::class, 'updateNews'])->name('updateNews');
Route::match(['post', 'get'], '/addNews', [\App\Http\Controllers\NewsController::class, 'addNews'])->name('addNews');

Route::match(['post', 'get'], '/getDataForm', [\App\Http\Controllers\FormController::class, 'getDataForm'])->name('getDataForm');
