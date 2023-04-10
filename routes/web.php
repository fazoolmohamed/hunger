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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store-post', [App\Http\Controllers\PostController::class, 'store'])->name('store.post');

#Commence Controller
Route::post('/store-commence', [App\Http\Controllers\CommenceController::class, 'store'])->name('store.commence');

Route::post('suggestion', [\App\Http\Controllers\SuggestionController::class, 'update'])->name('suggestion.box');
