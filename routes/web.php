<?php

use App\Http\Controllers\moviesController;
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

// Route::view('/farah', 'farah');


Route::get('/', [moviesController::class, 'index'])->name('movies.index');
Route::get('/movie/{movie}', [ moviesController::class, 'show'])->name('movies.show');
