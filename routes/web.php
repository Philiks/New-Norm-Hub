<?php

use App\Http\Controllers\BlogController;
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
Route::view('/navigation', 'navigation')->name('nav');

Route::view('/', 'home')->name('home');
Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/terms-and-services', 'terms-and-services')->name('terms-and-services');
Route::get('/blogs', [BlogController::class, 'create'])
        ->middleware('auth')
        ->name('blog.write');
Route::get('/profiles', [BlogController::class, 'create'])->name('profile');

Route::apiResource('blog', BlogController::class);

require __DIR__.'/auth.php';
