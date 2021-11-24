<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miControlador;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
 * 
 * 
 * Para que funcione todo, dentro del proyecto en consola:
 * php artisan migrate     --> Comando que crea las tablas definidas en database/migrations
 * 
 * php artisan db:seed --class=PersonaSeeder
 * php artisan db:seed --class=comentarioSeeder
 * 
 * Estos comandos anteriores rellenan la base de datos (ver archivo .env).
 * 
 * Finalmente, en modo consola:
 * php artisan serve
 * Esto habilita el servicio web en la ruta: http://localhost:8000/api/listar
 * 
 * 
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::get('listar',[miControlador::class,'listado']); //http://127.0.0.1:8000/api/listar
Route::get('buscar/{id}',[miControlador::class,'buscar']);//http://127.0.0.1:8000/api/buscar/9
Route::post('registrar', [miControlador::class,'registrar']);
Route::put('modificar/{id}', [miControlador::class,'modificar']);
Route::delete('borrar/{id}', [miControlador::class,'borrar']);
Route::get('buscarcomentarios/{id}',[miControlador::class,'buscarComentarios']); //http://localhost:8000/api/buscarcomentarios/4