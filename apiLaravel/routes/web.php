<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miControlador;

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

Route::get('test',[miControlador::class, 'prueba']);


//Desde la versión 7 de Laravel.
//
//You would have to use the Fully Qualified Class Name for your Controllers when referring to them in your routes when not using the namespace prefixing.
//
//use App\Http\Controllers\UserController;
//
//Route::get('/users', [UserController::class, 'index']);
//// or
//Route::get('/users', 'App\Http\Controllers\UserController@index');
//
//If you prefer the old way:
//
//App\Providers\RouteServiceProvider:
//
//public function boot()
//{
//    ...
//
//    Route::prefix('api')
//        ->middleware('api')
//        ->namespace('App\Http\Controllers') // <---------
//        ->group(base_path('routes/api.php'));
//
//    ...
//}

//Route::middleware(['auth:api'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
