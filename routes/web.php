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




use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\UsuarioController;
use App\Models\Prestamo;
use App\Models\Usuario;



Route::get('/usuarios' , [ UsuarioController::class ,'index']) -> name ('usuarios');
Route::get('/create' , [ UsuarioController::class ,'create']) -> name ('usuarios-create');
Route::post ('/usuarios', [UsuarioController::class , 'store'] ) -> name('agenda-store');
Route::get ('layouts/{create}', [usuarioController::class , 'show']) ->where(['usuarios' => '[A+Za-z]+'])->name('usuarios-show');

Route::get('/libros' , [ LibroController::class , 'index' ] ) ->name('libros');

Route::get('/prestamos' , [ PrestamoController::class , 'index' ]) ->name('prestamos');


/*Route::resource('libros', [LibroController::class , 'usuariosView']   );
Route::resource('/prestamos', PrestamoController::class); */



// Route::get('/' , homeController::class);
// Route::get ('usuarios', [UsuarioController::class , 'index']) ->name('usuarios.index');
// Route::get ('agenda/create', [agendaController::class , 'create']) ->name('agenda.create');
// Route::post ('agenda', [agendaController::class , 'store'] ) -> name('agenda.store');

