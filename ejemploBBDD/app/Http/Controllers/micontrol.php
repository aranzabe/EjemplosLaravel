<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class micontrol extends Controller {

    public function listar() {
        //************* Sin QueryBuilder ******************
        // a) Select sencilla con un valor.
<<<<<<< HEAD
         $personas = DB::select('select * from personas where DNI = ?', ['1A']);
=======
        // $personas = \DB::select('select * from personas where DNI = ?', ['1A']);
>>>>>>> master
        //b) Usando un parámetro con nombre.
        // $personas = \DB::select('select * from personas where DNI = :dn', ['dn' => '2B']);
        //c) Consulta de varias tablas.
        // $quer = 'select * from personas, propiedades, coches'
        //   . ' where propiedades.DNI = personas.DNI '
        //   . 'AND propiedades.Matricula = coches.Matricula And personas.DNI = ?';
        // //dd($quer);
        // $personas = \DB::select($quer,['1A']);
        /*
         * Otros ejemplos sin QB:
         */
        //\DB::insert('insert into personas (DNI, Nombre, Tfno, edad) values (?, ?, ?, ?)', ['195J', 'Daniel', '1234', 36]);
        /* $afectadas = \DB::update('update personas set Tfno = '100' where DNI = ?', ['3C'])
         * $borradas = \DB::delete('delete from personas');
         */




        //************* Con Query Builder ****************
        //Dirección de interés para Query Builder: https://laravel.com/docs/5.5/queries
        //a) El equivalente de una select *.
        //$personas = \DB::table('personas')->get();
        //b) Select con condiciones
        // $personas = \DB::table('personas')
        //  ->select('DNI', 'Nombre', 'Tfno', 'edad')
        //  ->where('DNI', '=', '3C')
        //  ->orderBy('edad', 'desc')
        //  ->get();
        //c) Selección con opciones AND y OR
        // $personas = DB::table('personas')
        //  ->select('DNI','Nombre','Tfno','edad')
        //  ->whereBetween('edad', [35, 40])
        //  ->orwhere('nombre','Laura')
        //  ->orderBy('edad','desc')
        //  ->get();
        //d) Selección haciendo join de varias tablas.
<<<<<<< HEAD
        // $personas = DB::table('personas')
        //         ->join('propiedades', 'propiedades.DNI', '=', 'personas.DNI')
        //         ->join('coches', 'coches.Matricula', '=', 'propiedades.Matricula')
        //         ->select('personas.DNI', 'Nombre', 'edad', 'Marca', 'Modelo')
        //         ->where('nombre','Nathan')
        //         ->get();
=======
        $personas = DB::table('personas')
                ->join('propiedades', 'propiedades.DNI', '=', 'personas.DNI')
                ->join('coches', 'coches.Matricula', '=', 'propiedades.Matricula')
                ->select('personas.DNI', 'Nombre', 'edad', 'Marca', 'Modelo')
                ->where('nombre','Nathan')
                ->get();
>>>>>>> master

//        var_dump($personas);
        ///Otras opciones con QB:
//          \DB::table('personas')->insert(
//          ['DNI' => '20T', 'Nombre' => 'Pepe', Tfno => '435', edad => 36]
//          );
//          \DB::table('personas')
//          ->where('DNI', '1A')
//          ->update(['Tfno' => '123']);
        //\DB::table('personas')->where('edad', '<', 18)->delete();
        //\DB::table('personas')->truncate();



        $datos = [
            'pers' => $personas
        ];

        return view('listado', $datos);
    }

    public function servicioWEBdatos(Request $req) {
        if ($req->has('dni')) {
            $dn = $req->get('dni');
            //$no = $req->get('nombre');
            $personas = DB::select('select * from personas where DNI = ?', [$dn]);
            //echo json_encode($personas);
            return response()->json($personas,200);
        } else {
            $personas = DB::table('personas')->get();
            //echo json_encode($personas);
            return response()->json($personas,200);
        }
    }

    public function servicioWEBdatosRuta($dni=null) {
        if ($dni==null){
            return response()->json("No hay datos",200);
        }
        else {
            $personas = DB::select('select * from personas where DNI = ?', [$dni]);
            return response()->json($personas,200);
        }
    }

    public function servicioWEB() {
//        $datos = [['num' => 1, 'texto' => "Laravel uno"],
//            ['num' => 2, 'texto' => "Laravel dos"],
//            ['num' => 3, 'texto' => "Laravel tres"],
//            ['num' => 4, 'texto' => "Laravel cuatro"]
//        ];
        //header("HTTP/1.1 200 OK");
        $personas = DB::table('personas')->get();
//        $datos = [
//            'pers' => $personas
//        ];
        echo json_encode($personas);
    }

    public function pruebaFaker() {
        $fak = \Faker\Factory::create('es_ES');
        //$fak = \Faker\Factory::create();
        echo 'Nombre: ' . $fak->name . '<br>';
        echo 'Nombre: ' . $fak->firstName . '<br>';
        echo 'Apellidos: ' . $fak->lastName . '<br>';
        echo 'Dirección: ' . $fak->address . '<br>';
        echo 'Texto al azar: ' . $fak->text . '<br>';
        echo 'email: ' . $fak->email . '<br>';
        echo 'Ciudad: ' . $fak->city . '<br>';
        echo 'Compañía: ' . $fak->company . '<br>';
        echo 'Clave aleatoria: ' . $fak->password . '<br>';
        echo 'DNI: ' . $fak->dni . '<br>';
        echo "<a href='indice'>Volver</a>";
        //Dirección de interés para faker: https://code.tutsplus.com/es/tutorials/using-faker-to-generate-filler-data-for-automated-testing--cms-26824
    }


    /*
    Esto que siguen son métodos de ejemplo de una aplicación realizada por compañeros vuestros, a modo de ejemplos.
    */
    public function actualizarAptiza() {
        $fak = \Faker\Factory::create('es_ES');
        $alumnos = \DB::table('alumno')->get();
        foreach ($alumnos as $a) {
            echo $a->COD . '<br>';
            //$afectadas = \DB::update('update alumno set EMAIL = '.$fak->email.' where COD = ?', [$a->COD]);
            \DB::table('alumno')
                    ->where('COD', $a->COD)
                    ->update(['EMAIL' => $fak->email, 'NOMBRE' => $fak->firstName, 'APELLIDOS' => $fak->lastName, 'DNI' => $fak->dni]);
        }
    }

    public function actualizarAptizaProfes() {
        $fak = \Faker\Factory::create('es_ES');
        $usuarios = \DB::table('usuarios')->get();
        foreach ($usuarios as $u) {
            echo $u->EMAIL . '<br>';
            if ($u->EMAIL != "aroa@gmail.com" && $u->EMAIL != "faranzabe@gmail.com" && $u->EMAIL != "agustin@ifpvirgen.com" && $u->EMAIL != "jalemrubio@telefonica.net") {
                $nombre = $fak->firstName;
                $apellidos = $fak->lastName;
                $dni = $fak->dni;
                \DB::table('usuarios')
                        ->where('EMAIL', $u->EMAIL)
                        ->update(['NOMBRE' => $nombre, 'APELLIDOS' => $apellidos, 'DNI' => $dni]);
                \DB::table('profesor')
                        ->where('EMAIL', $u->EMAIL)
                        ->update(['NOMBRE' => $nombre, 'APELLIDOS' => $apellidos, 'DNI' => $dni]);
            } else {
                echo $u->EMAIL . '--> No se ha cambiado. <br>';
            }
        }
    }

    public function actualizarAptizaProfesDelicados() {
        $fak = \Faker\Factory::create('es_ES');
        $usuarios = \DB::table('usuarios')->get();
        foreach ($usuarios as $u) {
            echo $u->EMAIL . '<br>';
            if ($u->EMAIL == "aroa@gmail.com" || $u->EMAIL == "faranzabe@gmail.com" || $u->EMAIL == "agustin@ifpvirgen.com" || $u->EMAIL == "jalemrubio@telefonica.net") {
                $nombre = $fak->firstName;
                $apellidos = $fak->lastName;
                $dni = $fak->dni;
                echo $u->EMAIL . '--> Nuevo nombre: ' . $nombre . ' ' . $apellidos . ' ' . $dni . '<br>';
                \DB::table('usuarios')
                        ->where('EMAIL', $u->EMAIL)
                        ->update(['NOMBRE' => $nombre, 'APELLIDOS' => $apellidos, 'DNI' => $dni]);
                \DB::table('profesor')
                        ->where('EMAIL', $u->EMAIL)
                        ->update(['NOMBRE' => $nombre, 'APELLIDOS' => $apellidos, 'DNI' => $dni]);
            } else {
                echo $u->EMAIL . '--> No se ha cambiado. <br>';
            }
        }
    }

    public function cambiarEmail() {
        $fak = \Faker\Factory::create('es_ES');
        $usuarios = \DB::table('usuarios')->get();
        foreach ($usuarios as $u) {
            echo $u->EMAIL . '<br>';
            $emailnuevo = $fak->email;
            $emailviejo = $u->EMAIL;
            if ($u->EMAIL == "aroa@gmail.com" || $u->EMAIL == "faranzabe@gmail.com" || $u->EMAIL == "agustin@ifpvirgen.com" || $u->EMAIL == "jalemrubio@telefonica.net") {
                echo $emailviejo . '--> ' . $emailnuevo . ' <br>';
            }
            \DB::table('usuarios')
                    ->where('EMAIL', $emailviejo)
                    ->update(['EMAIL' => $emailnuevo]);
            \DB::table('profesor')
                    ->where('EMAIL', $emailviejo)
                    ->update(['EMAIL' => $emailnuevo]);
        }
    }

}
