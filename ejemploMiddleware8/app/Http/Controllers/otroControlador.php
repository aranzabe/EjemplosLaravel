<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class otroControlador extends Controller {

    //Los middleware que pongamos en este constructor serán pasados (en orden y salvo excepcions o inclusiones) antes de llamar a las funciones.
    function __construct() {
        
        //Con esta manera todas las funciones pasan por el mid, sin excepciones.
//        $this->middleware('mid1');  
//        $this->middleware(['mid1','mid2']);

        $this->middleware('mid1')->only('unaAccion'); //De esta forma solo las funciones que pongamos en 'only' pasan el mid.
//        $this->middleware('mid1')->except('unaAccion'); //De esta forma todas las funciones, antes de ejecutarse, deben pasar por el mid1 (salvo unaAccion).
    }
    
    public function unaAccion(){
        return view('welcome');
    }
    
    public function otraAccion(){
        return view('welcome');
    }
    

}
