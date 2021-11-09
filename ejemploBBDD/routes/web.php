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

Route::get('indice', function () {
    return view('welcome');
});

Route::any('servicioWEB','micontrol@servicioWEBdatos');
Route::get('servicioWEBdatosRuta/{dni?}', 'micontrol@servicioWEBdatosRuta');

Route::get('listar','micontrol@listar');

Route::get('pruebafaker','micontrol@pruebaFaker');




Route::get('aptizaAlumnos','micontrol@actualizarAptiza');

Route::get('aptizaProfes','micontrol@actualizarAptizaProfes');

Route::get('aptizaProfesDelicados','micontrol@actualizarAptizaProfesDelicados');

Route::get('cambiarEmailProfes','micontrol@cambiarEmail');