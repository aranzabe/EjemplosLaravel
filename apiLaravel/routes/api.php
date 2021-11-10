<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; //Desde la versión 7 hay que poner esto para poder encontrar el controlador.



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
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


//Route::get('articles', 'ArticleController@index');
//Route::get('articles/{article}', 'ArticleController@show');
//Route::post('articles', 'ArticleController@store');
//Route::put('articles/{article}', 'ArticleController@update');
//Route::delete('articles/{article}', 'ArticleController@delete');


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Desde la versión 7 de Laravel.
Route::post('login', [ArticleController::class, 'login']);
//Route::group(['middleware' => 'auth:api'], function() {
Route::get('logout', [ArticleController::class, 'logout']);
Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/{article}', [ArticleController::class, 'show']);
Route::post('articles',[ArticleController::class, 'store']);
Route::put('articles/{article}',[ArticleController::class, 'update']);
Route::delete('articles/{article}', [ArticleController::class, 'delete']);
//});

/*
 * Como agregar la protección de rutas en la api. 
 * Usaremos una librería llamada passport que instalamos así:
 * 
 * composer require laravel/passport
 * Este paquete es fundamental ya que, como su nombre lo indica, Laravel posee un sistema tradicional de autenticación pero, para el caso del 
 * desarrollo de una API, Laravel ofrece algo específico. Laravel Passport.
 * 
 * Después realizamos las migraciones para incorporar las tablas que necesita dicha librería y la autenticación.
 * 
 * php artisan migrate 
 * 
 * Luego, debes ejecutar el comando passport:install. Este comando creará las llaves de encriptación necesarias para generar los tokens de acceso. 
 * Adicionalmente el comando creará el “personal access” y “password grant” de los clientes que se usarán para generar los tokens de acceso:
 * 
 * php artisan passport:install
 * 
 * Luego de ejecutar este comando, hay que agregar el trait Laravel\Passport\HasApiTokens al modeloApp\User. Este Trait provee algunos métodos 
 * de ayuda a tu modelo que te permitirán inspeccionar al token y scope de los usuarios autenticados: Ir App\Models\User.
 * 
 * Luego deberás llamar al método Passport::routes dentro del método boot en tu app/Providers/AuthServiceProvider. Este método registrará las 
 * rutas necesarias para emitir tokens de acceso y revocar tokens de acceso, clientes y tokens de acceso personal.
 * 
 * 
 * Para terminar en tu archivo de configuración config/auth.php, tu deberás ajustar la opción del driver de la autenticación de la api en el ‘guards’ 
 * a passport. Esto le indicará a tu aplicación que use el TokenGuard de Passport al autenticar las solicitudes API entrantes.
 * 
 * Finalmete tendremos que aplicar el middleware 'auth:api' a las funciones del controlador o a las rutas que creamos convenientes.
 * 
 * 
 * https://cvallejo.medium.com/sistema-de-autenticaci%C3%B3n-api-rest-con-laravel-5-6-240be1f3fc7d
 * https://www.itsolutionstuff.com/post/laravel-8-rest-api-with-passport-authentication-tutorialexample.html
 * https://programacionymas.com/blog/api-rest-laravel-passport
 * https://laravel.com/docs/8.x/passport
 */