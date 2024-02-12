<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
// Route::get('usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
// Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
// Route::get('usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');

Route::get('register', [UsuarioController::class, 'create'])->name('register.index');
Route::post('register', [UsuarioController::class, 'store'])->name('register.store');


Route::get('login', [LoginController::class, 'create'])->name('login.index');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::get('logout', [LoginController::class, 'destroy'])->name('login.destroy');

Route::get('Agendar', [AgendaController::class, 'create'])->name('Agendar.create');
Route::post('Agendar', [AgendaController::class, 'store'])->name('Agendar.store');

Route::get('reservas', [AgendaController::class, 'show'])->name('reservas.index');

Route::get('Servicios', function() {
    return view('Servicios');
})->name('Servicios');