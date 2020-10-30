<?php

use Illuminate\Support\Facades\Route;
use App\Mail\newUserWelcomeMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!


////run fllowing if 404 err
php artisan route:cache
php artisan cache:clear
php artisan route:cache  
php artisan config:cache  
php artisan view:clear 

npm run watch
|
*/



Auth::routes();

Route::get('/email', function () {
	return new newUserWelcomeMail();
});

Route::post('/follow/{user}', [App\Http\Controllers\FollowsController::class, 'store']);

Route::get('/', [App\Http\Controllers\PostsController::class, 'index']);
Route::get('/post/create', [App\Http\Controllers\PostsController::class, 'create']);
Route::get('/post/{post}', [App\Http\Controllers\PostsController::class, 'show']);
Route::post('/post', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


