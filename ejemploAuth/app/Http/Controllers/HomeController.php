<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    /*
     * Alternativamente, una vez que el usuario haya sido autenticado, puedes acceder al usuario autenticado mediante una instancia de 
     * Illuminate\Http\Request. Recuerda que las clases a las cuales se le declaren el tipo serán inyectadas automáticamente en los métodos 
     * de tu controlador:
     */

    // $request->user() returns an instance of the authenticated user...
//    public function prueba(Request $request) {
//        echo $request->user(); //returns an instance of the authenticated user...
//    }
    //Para determinar si el usuario actual está logueado en tu aplicación, puedes usar el método check del facade Auth, el cual devolverá 
    //true si el usuario está autenticado:
    //if (Auth::check()) {
    // The user is logged in...
    //}
}
