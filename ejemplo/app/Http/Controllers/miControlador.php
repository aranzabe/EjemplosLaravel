<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\Persona;

class miControlador extends Controller
{
    public function recoger(Request $req){
        $nom = $req->get('nombre');
        //El get directamente obtiene los datos dle formulario. Si en el formulario son
        //datos individuales se recibirá como una variable. En caso de estar definidas con []
        //se recibirá un array. Pero aquí solo usamos el método ->get().
        $num = $req->get('num');
        
        $pers = new Persona($nom, $num);
        //dd($num);
        \Session::put('ses',124);
        session()->put('otrases','DAW2');
        session()->put('obj',$pers);
        //$num = $num + 2;
        
        //Preparamos los datos que vamos a enviar a la vista (resources/views).
        $datos = ['nombre' => $nom,
                  'numero' => $num,
                  'objeto' => $pers];
        
        return view('mostrar',$datos);
    }
}
