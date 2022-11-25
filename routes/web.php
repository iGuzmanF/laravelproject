<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class);
Route::resource('municipios', App\Http\Controllers\MunicipioController::class);
Route::resource('familiares', App\Http\Controllers\FamiliareController::class);
Route::resource('establecimientos', App\Http\Controllers\EstablecimientoController::class);
Route::resource('pacientes', App\Http\Controllers\PacienteController::class);
Route::resource('expedientes', App\Http\Controllers\ExpedienteController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
