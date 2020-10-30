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

Route::get('/', [App\Http\Controllers\TodoItemsController::class, 'index']);
Route::post('/task', [App\Http\Controllers\TodoItemsController::class, 'store']);
Route::post('/task/{item}', [App\Http\Controllers\TodoItemsController::class, 'destroy']);
Route::put('/task/{item}', [App\Http\Controllers\TodoItemsController::class, 'update']);

