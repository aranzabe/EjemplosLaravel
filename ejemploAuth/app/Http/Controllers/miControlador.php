<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miControlador extends Controller
{
    /**
     * Se podría personalizar un middleware para admin que incluyera este código:
    if (\Auth::user()->role == 'admin') {
      return $next($request);
    }

      return redirect('home');
     * 
     * Si este mid se llamara admin, podríamos poner esto aquí:
     * $this->middleware('admin')->except('otroIndex');
     */
    function __construct() {
        //$this->middleware('auth');
        //$this->middleware('auth')->only('index');
        $this->middleware('auth')->except('otroIndex');
    }

    function index(){
        echo 'Solo autenticados';
    }
    
    function otroIndex(){
        echo 'Auntenticados solamente';
    }
    
}
