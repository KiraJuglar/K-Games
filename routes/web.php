<?php

use App\Http\Controllers\VideojuegoController;
use App\Http\Controllers\DescargaController;
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

Route::get('/', [VideojuegoController::class, 'index']);

Route::resource('/videojuego', VideojuegoController::class) ->except(['index']);

Route::resource('/descarga', DescargaController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
