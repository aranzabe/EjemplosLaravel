<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miControlador extends Controller
{
    //
    public function store(){
        User::create(['daniel','daniel@dfj.es','Chubaca']);
    }
}
