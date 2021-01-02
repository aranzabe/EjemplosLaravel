<?php

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

Route::get('verpersonas','miControlador@verPersonas');

Route::get('verpersonasconcoche','miControlador@verPersonasCoche');

Route::get('buscarpersona', function () {
    return view('formularioBuscarPersona');
});
Route::post('validarbuscarpersona','miControlador@buscarPersona');

Route::get('insertarpersona', function () {
    return view('formularioInsertarPersona');
});
Route::post('validarinsertarpersona','miControlador@insertarPersonas');

Route::get('vermayores','miControlador@vermayores');

Route::get('volver', function () {
    return view('welcome');
});

Route::get('probarFind','miControlador@probarFind');

Route::get('probarMany','miControlador@probarMany');

Route::get('probarManyUnaPersona',function () {
    return view('buscarPersonaCoche');
});

Route::post('validarbuscarpersonaCoche','miControlador@probarManyUnaPersona');

Route::get('probarBelong','miControlador@probarBelong');