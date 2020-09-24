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

Route::get('/', \App\Http\Controllers\PostController::class . '@index');

//Route::resource('/post', 'PostController');

Route::get('post/', \App\Http\Controllers\PostController::class . '@index')->name('post.index');
Route::get('post/create', \App\Http\Controllers\PostController::class . '@create')->name('post.create');
Route::get('post/show/{id}', \App\Http\Controllers\PostController::class . '@show')->name('post.show');
Route::get('post/edit/{id}', \App\Http\Controllers\PostController::class . '@edit')->name('post.edit');
Route::post('post/', \App\Http\Controllers\PostController::class . '@store')->name('post.store');
Route::patch('post/show/{id}', \App\Http\Controllers\PostController::class . '@update')->name('post.update');
Route::delete('post/{id}', \App\Http\Controllers\PostController::class . '@destroy')->name('post.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
