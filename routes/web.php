<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MetodosController;
use App\Http\Controllers\AjaxController;
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

Route::get('/', LoginController::class) ->name('login');

Route::get('registro', RegisterController::class) ->name('registro');

Route::get('home', HomeController::class) -> middleware('auth') ->name('home'); //el middleware impide entrar sin inicar sesion

Route::post('validar-registro', [LoginController::class, 'register']) ->name('validar-registro');

Route::post('inicia-sesion', [LoginController::class, 'login']) ->name('inicia-sesion');

Route::get('logout', [LoginController::class, 'logout']) ->name('logout');

Route::get('biblioteca', [BibliotecaController::class, 'index']) -> middleware('auth') ->name('biblioteca.index');

Route::get('libro/{id}', [BibliotecaController::class, 'show']) -> middleware('auth') ->name('biblioteca.show');

Route::post('nuevaLectura/{id}', [BibliotecaController::class, 'store']) ->name('biblioteca.store');

Route::post('quitarLectura/{id}', [BibliotecaController::class, 'delete']) ->name('biblioteca.delete');

Route::get('perfil', [PerfilController::class, 'showUsuario']) -> middleware('auth') ->name('perfil');

Route::get('agregarLibro', [AdminController::class, 'create']) ->name('admin.create');

Route::get('modLibro', [AdminController::class, 'update']) ->name('admin.update');

Route::get('borrarLibro', [AdminController::class, 'delete']) ->name('admin.delete');

Route::post('metodo/create', [MetodosController::class, 'store']) ->name('metodo.store');

Route::put('metodo/{libro}', [MetodosController::class, 'update']) ->name('metodo.update');

Route::delete('metodo/destroy', [MetodosController::class, 'destroy']) ->name('metodo.destroy');

Route::get('/libros', [AjaxController::class, 'getLibros'])->name('libros.get');

Route::get('/libros/buscar', [AjaxController::class, 'buscarLibros'])->name('libros.buscar');
