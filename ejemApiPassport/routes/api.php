<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

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


//Desde la versión 7 de Laravel.
//Route::post('login', [ArticleController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('logout', [ArticleController::class, 'logout']);
    Route::get('articles', [ArticleController::class, 'index']);
    Route::get('articles/{article}', [ArticleController::class, 'show']);
    Route::post('articles', [ArticleController::class, 'store']);
    Route::put('articles/{article}', [ArticleController::class, 'update']);
    Route::delete('articles/{article}', [ArticleController::class, 'delete']);
});


/*
 * Bibliografía:
 * https://dev.to/kingsconsult/how-to-create-a-secure-crud-restful-api-in-laravel-8-and-7-using-laravel-passport-31fh
 * https://stackoverflow.com/questions/30426047/correct-way-to-set-bearer-token-with-curl
 * 
 */