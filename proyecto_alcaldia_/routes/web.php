<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\UsuarioController;

Route::get('/home', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

////Routes from EQUIPO
Route::get('equipo',[EquipoController::class,'index'])->name('equipo.index_equipo');
Route::get('equipo/create',[EquipoController::class,'create'])->name('equipo.create');
Route::post('equipo',[EquipoController::class,'store'])->name('equipo.store');
Route::get('equipo/{id}',[EquipoController::class,'show'])->name('equipo.show');
Route::get('equipo/edit/{id}',[EquipoController::class,'edit'])->name('equipo.edit');
Route::get('equipo/{id}',[EquipoController::class,'update'])->name('equipo.update');
Route::get('equipo/{id}',[EquipoController::class,'destroy'])->name('equipo.destroy');
//
//// Routes from JUGADOR
Route::get('jugador',[JugadorController::class,'index'])->name('jugador.index_jugador');
Route::get('jugador/create',[JugadorController::class,'create'])->name('jugador.create');
Route::post('jugador',[JugadorController::class,'store'])->name('jugador.store');
Route::get('jugador/{id}',[JugadorController::class,'show'])->name('jugador.show');
Route::get('jugador/edit/{id}',[JugadorController::class,'edit'])->name('jugador.edit');
Route::get('jugador/{id}',[JugadorController::class,'update'])->name('jugador.update');
Route::get('jugador/{id}',[JugadorController::class,'destroy'])->name('jugador.destroy');

// Routes from LOCALIDAD
Route::get('localidad',[LocalidadController::class,'index'])->name('localidad.index');
Route::get('localidad/create',[LocalidadController::class,'create'])->name('localidad.create');
Route::post('localidad',[LocalidadController::class,'store'])->name('localidad.store');
Route::get('localidad/{id}',[LocalidadController::class,'show'])->name('localidad.show');
Route::get('localidad/edit/{id}',[LocalidadController::class,'edit'])->name('localidad.edit');
Route::get('localidad/{id}',[LocalidadController::class,'update'])->name('localidad.update');
Route::get('localidad/{id}',[LocalidadController::class,'destroy'])->name('localidad.destroy');
