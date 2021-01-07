<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; //Desde la versión 7 hay que poner esto para poder encontrar el controlador.

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    retu/var/www/html/EjemplosLaravelrn $request->user();
//});

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
 * php artisan db:seed --class=ArticlesTableSeeder
 * php artisan db:seed --class=UsersTableSeeder
 * 
 * Estos comandos anteriores rellenan la base de datos (ver archivo .env).
 * 
 * Finalmente, en modo consola:
 * php artisan serve
 * Esto habilita el servicio web en la ruta: http://localhost:8000/api/articles/
 * 
 * Para más información: https://www.netireki.eus/crear-rest-api-con-laravel-step-1
 * 
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('articles', 'ArticleController@index');
//Route::get('articles/{article}', 'ArticleController@show');
//Route::post('articles', 'ArticleController@store');
//Route::put('articles/{article}', 'ArticleController@update');
//Route::delete('articles/{article}', 'ArticleController@delete');

//Desde la versión 7.
Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/{article}', [ArticleController::class, 'show']);
Route::post('articles',[ArticleController::class, 'store']);
Route::put('articles/{article}',[ArticleController::class, 'update']);
Route::delete('articles/{article}', [ArticleController::class, 'delete']);