<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;


Route::get('/', function () {
    return view('home'); // Crea esta vista más adelante
})->name('home');

Route::prefix('empleados')->group(function () {
    Route::get('/', function () {
        return view('empleados.index'); // Crea esta vista más adelante
    })->name('empleados.index');
});

Route::prefix('cargos')->group(function () {
    Route::get('/', function () {
        return view('cargos.index'); // Crea esta vista más adelante
    })->name('cargos.index');
});

Route::resource('cargos', CargoController::class);
