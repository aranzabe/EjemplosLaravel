<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return response()->json(['code' => 200, 'message' => $personas], 200);
    }


    public function show($id)
    {
         // Comprobamos si el artículo existe.
        $persona = Persona::find($id);

        // Si no existe ese artículo devolvemos un error.
        if (!$persona) {
            // Se devuelve un array errors con los errores encontrados y cabecera HTTP 404.
            // En code podríamos indicar un código de error personalizado de nuestra aplicación si lo deseamos.
            return response()->json(['code' => 404, 'message' => 'No se encuentra un artículo con ese código ' . $id], 404);
        }

        //return $persona;
        return response()->json(['code' => 200, 'message' => $persona], 200);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
