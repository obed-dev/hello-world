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
Route::get ('/', function(){
 return view('libros');
});


Route::get('/usuarios', [ UsuarioController::class ,'usuariosView' ] );
Route::get('/libros' , [ LibroController::class , 'librosView'   ] );

/*Route::resource('libros', [LibroController::class , 'usuariosView']   );
Route::resource('/prestamos', PrestamoController::class); */



// Route::get('/' , homeController::class);
// Route::get ('agenda', [agendaController::class , 'index']) ->name('agenda.index');
// Route::get ('agenda/create', [agendaController::class , 'create']) ->name('agenda.create');
// Route::post ('agenda', [agendaController::class , 'store'] ) -> name('agenda.store');
// Route::get ('agenda/{agenda}', [agendaController::class , 'show']) ->where(['agenda' => '[A+Za-z]+'])->name('agenda.show');
