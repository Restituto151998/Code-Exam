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

Route::get('/articles',[App\Http\Controllers\ArticleController::class, 'show']);
Route::post('/articles',[App\Http\Controllers\ArticleController::class, 'create']);
Route::get('/articles/delete/{id}',[App\Http\Controllers\ArticleController::class, 'delete']);
Route::put('/articles/update/{id}',[App\Http\Controllers\ArticleController::class, 'update']);