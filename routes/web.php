<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/saludo/{nombre}/{apellido}/{correo?}/{telefono?}/{direccion}', 
          [HomeController::class, 'home']);

Route::get('/datos/mostrar/{nombre}/{edad}/{direccion}',[HomeController::class, 'mostrarDatos']);

