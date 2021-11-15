<?php

use App\Http\Controllers\miControlador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('verpersonas',[miControlador::class, 'verPersonas']);

Route::get('verpersonasconcoche',[miControlador::class,'verPersonasCoche']);

Route::get('buscarpersona', function () {
    return view('formularioBuscarPersona');
});
Route::post('validarbuscarpersona',[miControlador::class, 'buscarPersona']);

Route::get('insertarpersona', function () {
    return view('formularioInsertarPersona');
});
Route::post('validarinsertarpersona',[miControlador::class, 'insertarPersonas']);

Route::get('vermayores',[miControlador::class, 'vermayores']);

Route::get('volver', function () {
    return view('welcome');
});

Route::get('probarFind',[miControlador::class, 'probarFind']);

Route::get('probarMany',[miControlador::class, 'probarMany']);

Route::get('probarManyUnaPersona',function () {
    return view('buscarPersonaCoche');
});

Route::post('validarbuscarpersonaCoche',[miControlador::class, 'probarManyUnaPersona']);

Route::get('probarBelong',[miControlador::class, 'probarBelong']);

Route::get('verComentarios',[miControlador::class,'verComentarios']);