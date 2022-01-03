<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miControlador extends Controller
{
    //
    function unaRuta(){
        echo 'Ruta libre';
    }

    function otraRuta(){
        echo 'Solo autenticados';
    }
}
