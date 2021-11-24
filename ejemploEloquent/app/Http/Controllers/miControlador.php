<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona; //--> Añadimos el espacio de direcciones de la clase Persona.
use App\Propiedad;
use App\Coche;

class miControlador extends Controller {

    public function verPersonas() {
        $pers = Persona::all();
        $datos = [
            'pers' => $pers
        ];

        return view('vistapersonas', $datos);
    }

    //------------------------------------------------------------------------
    public function probarFind() {
        $pers = Persona::find('4D');
        $datos = [
            'pers' => $pers
        ];
        return view('verFind', $datos);
    }

    //------------------------------------------------------------------------
    public function buscarPersona(Request $req) {
        $dn = $req->get('DNIBuscado');
        //Opción A.
        //$pers = Persona::where('DNI', $dn)->first();
        //Opción B.
        $pers = Persona::find($dn);

        $datos = [
            'pers' => $pers
        ];

        return view('resultadoBusqueda', $datos);
    }

    //------------------------------------------------------------------------
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

    //------------------------------------------------------------------------
    public function vermayores() {
        $pers = Persona::where('edad', '>', 18)
                ->orderBy('Nombre', 'asc')
                ->get();
        $datos = [
            'pers' => $pers
        ];

        return view('vistapersonasmayores', $datos);
    }

    //------------------------------------------------------------------------
    public function verPersonasCoche() {
//        $p = Propiedad::first();
//        dd($p->DNI);


        $p = Propiedad::all();
        $vectorDatos = [];
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
        
//        $pers = Persona::with('cochesAlquilados')->get();
//        if ($pers) {
//                $vectorDatos[] = ['DNI' => $pe->DNI,
//                    'Matricula' => $pe->Matricula,
//                    'Nombre' => $pers->Nombre,
//                    'Tfno' => $pers->Tfno,
//                    'edad' => $pers->edad];
//            }
        //dd($vectorDatos);
        //dd($pers->Nombre);
        //dd($p->propiedad);
        //$p = Propiedad::first();
        //dd($p->usuarios);
        return view('verPersonasConCoche', ['pers' => $vectorDatos]);
    }

    //------------------------------------------------------------------------

    /**
     * Busca personas con coche usando la propiedad hasMany que tenemos definida en el modelo.
     * @return type
     */
    public function probarMany() {
//        //Opción A.
//        //Destierro y latigazos.
//        $coches = Propiedad::with('usuarios')->get();
////        dd($coches);  
//        $conalquiler = [];
//        foreach ($coches as $co) {
//            foreach ($co->usuarios as $usu) {
//                $datocoche = Coche::find($co->Matricula);
//                $conalquiler[] = ['DNI' => $usu->DNI,
//                    'Nombre' => $usu->Nombre,
//                    'Matricula' => $co->Matricula,
//                    'Marca' => $datocoche->Marca,
//                    'Modelo' => $datocoche->Modelo];
//            }
//        }
        //Opción B.
//        $pers = Persona::with(['cochesAlquilados'])->get();
//        $conalquiler = [];
//        foreach ($pers as $pe) {
//            //dd($pe->DNI);
//            //dd($pe->cochesAlquilados);
//            foreach ($pe->cochesAlquilados as $co) {
////                dd($co);
//                $conalquiler[] = ['DNI' => $pe->DNI,
//                    'Nombre' => $pe->Nombre,
//                    'Matricula' => $co->Matricula];
//            }
//        }
//        dd($conalquiler);
        //Opción C.
        $coches = Propiedad::with(['usuarios', 'coches'])->get();  //Le pasamos las llamadas a los métodos de los modelos (usuarios y coches).
//        dd($coches);  
        
        $conalquiler = [];
        foreach ($coches as $co) {
//            dd($co->usuarios[0]->Nombre);
            $conalquiler[] = [
                'DNI' => $co->DNI,
                'Nombre' => $co->usuarios[0]->Nombre,
                'Matricula' => $co->Matricula,
                'Marca' => $co->coches[0]->Marca,
                'Modelo' => $co->coches[0]->Modelo
            ];
        }

        
        $datos = [
            'pers' => $conalquiler
        ];
        return view('verMany', $datos);
    }

    //------------------------------------------------------------------------
    public function probarManyUnaPersona(Request $req) {

        $dni = $req->get('DNI');


        //Opción A.
//        $coches = Propiedad::with(['usuarios'])->where('DNI', $dni)->get();
//        //dd($coches);
//        $conalquiler = [];
//        foreach ($coches as $co) {
//            foreach ($co->usuarios as $usu) {
//                $datocoche = Coche::find($co->Matricula);
//                $conalquiler[] = ['DNI' => $usu->DNI,
//                    'Nombre' => $usu->Nombre,
//                    'Matricula' => $co->Matricula,
//                    'Marca' => $datocoche->Marca,
//                    'Modelo' => $datocoche->Modelo];
//            }
//        }
        //Opción B.
        $coches = Propiedad::with(['usuarios'])->where('DNI', $dni)->get();
        
        $conalquiler = [];
        foreach ($coches as $co) {
//            dd($co->usuarios[0]->Nombre);
            $conalquiler[] = [
                'DNI' => $co->DNI,
                'Nombre' => $co->usuarios[0]->Nombre,
                'Matricula' => $co->Matricula,
                'Marca' => $co->coches[0]->Marca,
                'Modelo' => $co->coches[0]->Modelo
            ];
        }


        $datos = [
            'pers' => $conalquiler
        ];
        return view('verMany', $datos);
    }

    //-------------------------------------------------------------------
    public function probarBelong() {
        $coches = Propiedad::with(['usuariosBelong','cochesBelong'])->get();
        dd($coches);
    }

}
