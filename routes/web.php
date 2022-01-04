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

Route::get('/login',[\App\Http\Controllers\UserController::class,'userLogin'])->name('user.login')->name('login');

Route::get('/register',[\App\Http\Controllers\UserController::class,'userRegister'])->name('user.register');

Route::get('/',[\App\Http\Controllers\SerieController::class,'accueilSerie'])->name('series.index');

Route::get('/series',[\App\Http\Controllers\SerieController::class,'showSerie'])->name('series.show');

Route::get('/series/{id}',[\App\Http\Controllers\SerieController::class,'showIdSerie'])->name('serie.show')->whereNumber(('id'));

Route::get('/series/seen/{id}/{series}',[\App\Http\Controllers\SerieController::class,'addSeen'])->name('episode.seen')->middleware('auth');

Route::get('series/{genre}',[\App\Http\Controllers\SerieController::class,'showGenreSerie'])->name('genre.show');

Route::any('/profile',[\App\Http\Controllers\UserController::class,'showUser'])->name('user.show');

Route::post('/series/{id}',[\App\Http\Controllers\SerieController::class,'store'])->name('comment.add');










//Route::post("/login", );
