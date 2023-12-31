<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\VideogameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);

Route::get('/awards', [AwardController::class, 'index']);

Route::get('/top-rated-movies', [MovieController::class, 'topRated']);

Route::get('/top-rated-games', [VideogameController::class, 'topRated']);

Route::get('/movies/detail', [MovieController::class, 'shawshank']);

Route::get('/movies', ['App\Http\Controllers\MovieController', 'index']);

Route::get('/search', [MovieController::class, 'search']);