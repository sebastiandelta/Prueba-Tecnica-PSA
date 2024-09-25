<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home'); 
});

Route::resource('empleados', EmpleadoController::class);
Route::resource('cargos', CargoController::class);