<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miControlador extends Controller {

    public function index() {
        $var = $_POST['nombre'];
        $caj = $_POST['caj'];
        echo "Estoy en el controlador. Parámetros pasados: ".$caj.' '.$var;//simplemente haremos que devuelva esto
    }
    
    

}
