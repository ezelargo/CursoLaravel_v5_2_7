<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevoControlador extends Controller
{

    public function principal(Request $request, $nombre = null)
    {
        /*
        $valor = $request->apellido;        
        $valor2 = request()->apellido;
        $valor3 = $request->query('apellido');
        return "hola $nombre $valor nuevamente: $valor2 y $valor3";
        */
        
        // return view('main', ['nombre' => 'ezequiel']);
        // return view('main')->with(['nombre' => 'ezequiel']
        $contenido = "<h1>Hola soy HTML</h1>";
        return view('main')->with(['nombre' => 'ezequiel', 'contenido' => $contenido]);
        
    }

}
