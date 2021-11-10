<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::group([
//    'middleware' => 'auth:api'
//        ], function() {
//});

/*
 * Si ahora accedemos a la ruta correspondiente de nuestra API pasándole los parámetros requeridos, obtendríamos el token correspondiente:
 * [POST] http://localhost:8080/api/register
 */
Route::post('register', [ArticleController::class,'register']);
Route::post('login', [ArticleController::class, 'login']);
//Route::post('register', [App\Http\Controllers\Auth\RegisterController::class,'register']);
//Route::post('login',[App\Http\Controllers\Auth\LoginController::class],'login)');

Route::group([
    'middleware' => 'tokenautorizado'
        ], function() {
    Route::get('logout', [ArticleController::class, 'logout']);
    Route::get('articles', [ArticleController::class, 'index']);
    Route::get('articles/{article}', [ArticleController::class, 'show']);
    Route::post('articles', [ArticleController::class, 'store']);
    Route::put('articles/{article}', [ArticleController::class, 'update']);
    Route::delete('articles/{article}', [ArticleController::class, 'delete']);
    Route::get('user', [ArticleController::class, 'user']);
});
//https://stackoverflow.com/questions/49294253/laravel-passport-route-login-not-defined