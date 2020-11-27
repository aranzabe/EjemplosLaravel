<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miControlador extends Controller
{
    public function recoger(Request $req){
        $nom = $req->get('nombre');
        $num = $req->get('num');
        //dd($num);
        \Session::put('ses',124);
        session()->put('otrases','DAW2');
        //$num = $num + 2;
        $datos = ['nombre' => $nom,
                  'numero' => $num];
        
        return view('mostrar',$datos);
    }
}
