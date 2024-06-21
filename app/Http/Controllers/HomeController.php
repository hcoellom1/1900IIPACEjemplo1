<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home(string $nombre, string $apellido, string $correo = null,
                        string $telefono = null, string $direccion)
    {
        if ($correo == ' ')
            echo 'Bienvenido: '.$nombre.' '.$apellido;
        else{
            echo 'Bienvenido: '.$nombre.' '.$apellido. ' '.$correo;
        }

    }

    public function mostrarDatos(string $nombre, int $edad, string $direccion){
        /*return view('datos', ['alias'=>$nombre,
                              'edad'=> $edad,
                              'direccion' => $direccion]);*/

        return view('datos', compact('nombre', 'edad', 'direccion'));
    }
    
    
}
