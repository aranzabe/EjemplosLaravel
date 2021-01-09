<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miControlador extends Controller {

    public function valida(Request $request) {
        echo 'Has introducido: ' . $request->get('caja') . '<br>';
        //return redirect()->route('ejemplo');
    }

    public function formul() {
        return view('formulario');
    }

    public function otraPagina(){
        return redirect()->route('bienvenida');
    }
}
