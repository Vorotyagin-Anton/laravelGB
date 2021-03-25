<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);
Route::get('/index', [\App\Http\Controllers\MainController::class, 'index'])->name('index')->middleware('auth');
Route::get('/category/{category}', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category')->middleware('auth');

Route::get('/news/{news}', [\App\Http\Controllers\NewsController::class, 'index'])->name('news')->middleware('auth');
Route::get('/allNews', [\App\Http\Controllers\NewsController::class, 'getAllNews'])->name('allNews')->middleware('auth');
Route::get('/deleteNews/{news}', [\App\Http\Controllers\NewsController::class, 'deleteNews'])->name('deleteNews')->middleware('auth');
Route::match(['post', 'get'],'/updateNews/{news}', [\App\Http\Controllers\NewsController::class, 'updateNews'])->name('updateNews')->middleware('auth');
Route::match(['post', 'get'], '/addNews', [\App\Http\Controllers\NewsController::class, 'addNews'])->name('addNews')->middleware('auth');

Route::match(['post', 'get'], '/getDataForm', [\App\Http\Controllers\FormController::class, 'getDataForm'])->name('getDataForm')->middleware('auth');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::match(['post', 'get'], 'updateProfile', [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('updateProfile')->middleware('auth', 'is.admin');

Route::get('/parse', [\App\Http\Controllers\Admin\ParserController::class, 'index'])->name('parser')->middleware('auth');

Route::get('/auth/vk', [\App\Http\Controllers\LoginController::class, 'loginVK'])->name('loginVK');
Route::get('/auth/vk/response', [\App\Http\Controllers\LoginController::class, 'responseVK'])->name('responseVK');
