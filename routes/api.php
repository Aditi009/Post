<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\API\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});





Route::post('login', [App\Http\Controllers\API\UserController::class, 'login']);
Route::post('register', [App\Http\Controllers\API\UserController::class, 'register']);
Route::group(['middleware' => 'auth:api'], function(){

    Route::get('post',[App\Http\Controllers\ApiController::class, 'post']);
    Route::post('addpost',[App\Http\Controllers\ApiController::class, 'addpost']);
    Route::get('edit/{id}',[App\Http\Controllers\ApiController::class, 'edit']);
    Route::delete('delete/{id}',[App\Http\Controllers\ApiController::class, 'delete']);
    Route::post('addeditpost',[App\Http\Controllers\ApiController::class, 'addedit']);
    
});