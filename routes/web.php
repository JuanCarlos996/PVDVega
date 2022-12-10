<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\SucursaleController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('empresas', App\Http\Controllers\EmpresaController::class);
Route::resource('empleado', App\Http\Controllers\EmpleadoController::class);
Route::resource('sucursale', App\Http\Controllers\SucursaleController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
