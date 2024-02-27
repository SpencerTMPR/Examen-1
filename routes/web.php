<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsiento;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Vuelos;
use App\Http\Controllers\VuelosAsientos;

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
    return view('welcome');
});

Route::get('/inicio', [Controller::class, 'inicio'])->name('inicio.principal');

Route::get('/inicio/tiposAsientos', [Controller::class,'tiposAsiento'])->name('inicio.tiposAsientos');

Route::get('/inicio/tiposAsientos/agregarTipoAsiento', [Controller::class, 'agregarTipoAsiento'])->name('inicio.agregarTipoAsiento');


