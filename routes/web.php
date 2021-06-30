<?php

use App\Http\Controllers\ApiController;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('post',[App\Http\Controllers\HomeController::class, 'post']);
Route::post('addpost',[App\Http\Controllers\HomeController::class, 'addpost']);
Route::get('edit/{id}',[App\Http\Controllers\HomeController::class, 'edit']);
Route::get('delete/{id}',[App\Http\Controllers\HomeController::class, 'delete']);
Route::post('addeditpost',[App\Http\Controllers\HomeController::class, 'addedit']);
