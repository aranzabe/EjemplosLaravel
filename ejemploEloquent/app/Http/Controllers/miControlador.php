<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona; //--> Añadimos el espacio de direcciones de la clase Persona.
use App\Propiedad;

class miControlador extends Controller {

    public function verPersonas() {
        $pers = Persona::all();

        $datos = [
            'pers' => $pers
        ];

        return view('vistapersonas', $datos);
    }

    public function buscarPersona(Request $req) {
        $dn = $req->get('DNIBuscado');
        $pers = Persona::where('DNI', $dn)->first();

        $datos = [
            'pers' => $pers
        ];

        return view('resultadoBusqueda', $datos);
    }

    public function insertarPersonas(Request $req) {
        $dn = $req->get('DNI');
        $no = $req->get('Nombre');
        $tf = $req->get('Tfno');
        $ed = $req->get('Edad');

        $pe = new Persona;
        $pe->DNI = $dn;
        $pe->Nombre = $no;
        $pe->Tfno = $tf;
        $pe->edad = $ed;
        $mensaje = 'Inserción ok';
        try {
            $pe->save();
        } catch (\Exception $e) {
            $mensaje = 'Clave duplicada';
        }
        return view('resultadoInsercion', ['mens' => $mensaje]);
    }

    public function vermayores() {
        $pers = Persona::where('edad', '>', 18)
                ->orderBy('Nombre', 'asc')
                ->get();
        $datos = [
            'pers' => $pers
        ];

        return view('vistapersonasmayores', $datos);
    }

    public function verPersonasCoche() {
//        $p = Propiedad::first();
//        dd($p->DNI);
        
        
        $p = Propiedad::all();
        $vectorDatos=[];
        foreach ($p as $pe) {
            $pers = Persona::where('DNI', $pe->DNI)->first();
            if ($pers) {
                $vectorDatos[] = ['DNI' => $pe->DNI,
                                  'Matricula' => $pe->Matricula,
                                  'Nombre' => $pers->Nombre,
                                  'Tfno' => $pers->Tfno,
                                  'edad' => $pers->edad];
            }
        }
        //dd($vectorDatos);

        //dd($pers->Nombre);
        //dd($p->propiedad);
        //$p = Propiedad::first();
        //dd($p->usuarios);
        return view('verPersonasConCoche',['pers' => $vectorDatos]);
    }

}
