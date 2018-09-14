<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    /*
    */
    public function saludar($nombre, $apellido = null)
    {
         return "Hola {$nombre} {$apellido}";
        // return route('panel.saludos');
    }
}
