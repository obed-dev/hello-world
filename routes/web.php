<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BookController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\UsuarioController;

Route::resource('usuarios', UsuarioController::class);
Route::resource('libros', LibroController::class);
Route::resource('prestamos', PrestamoController::class);
