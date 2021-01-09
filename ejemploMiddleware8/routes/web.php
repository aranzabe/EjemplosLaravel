<?php

use Illuminate\Support\Facades\Route;

/*

  Este ejemplo también contiene información de como incluir JS y CSS en Laravel.

 */


Route::get('/', function () {
    return view('welcome');
})->name('bienvenida');


//a) Middleware en una función closure.
//Route::get('ejem', function () {
//    return view('formulario');
//})->middleware('mid1');

//b) Middleware a una ruta.
Route::get('ejem', [App\Http\Controllers\miControlador::class,'formul'])->middleware(['mid1','mid2']);

//c) Varios middleware a varias rutas.
//Route::get('ejem', [App\Http\Controllers\miControlador::class,'formul'])->middleware(['mid1','mid2'])->name('ejemplo');

Route::post('validar', [App\Http\Controllers\miControlador::class, 'valida']);
Route::get('validar', function () {
    return view('errors/503');
});
//d) Grupo de rutas. Administrador.
Route::group(['prefix' => 'rutas', 'middleware' => ['mid1', 'mid2']], function() {

    Route::get('ejem', [App\Http\Controllers\miControlador::class,'formul'])->name('ejem');

    Route::get('ejem2', [App\Http\Controllers\miControlador::class,'otraPagina'])->name('ejem2');


    Route::post('validar', [App\Http\Controllers\miControlador::class, 'valida']);
    Route::get('validar', function () {
        return view('errors/503');
    });
});


/*
 * Si deseamos seguir trabajando de la misma forma que lo hacíamos en versiones anteriores de Laravel, entonces lo más sencillo es modificar el 
 * RouteServiceProvider de la siguiente forma.
 * Simplemente sobrescribimos la propiedad namespace del RouteServiceProvider y la utilizamos en las rutas Web y Api a través del método namespace
 * para que todo funcione como siempre.
 */

/*
 <?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    
    public const HOME = '/dashboard';

    protected $namespace = "App\\Http\\Controllers"; // add this

    
    public function boot()
    {
        
        // ...
      
        $this->routes(function () {
            Route::middleware('web')
                ->namespace($this->namespace) // add this
                ->group(base_path('routes/web.php'));

            Route::prefix('api')
                ->namespace($this->namespace) // add this
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });
    }
}
 */

//Antigua forma de nomenclatura completa.
//Route::get('unaRuta', [
//    'uses' => [App\Http\Controllers\miControlador::class,'formul'],
//    'name' => 'unaRuta',
//    'middleware' => 'mid1']);


/*
 * Finalmente, otra forma de proteger usando middleware. Hasta ahora hemos protegido rutas. Ahora veremos como pasar los mid desde el controlador.
 * Ver el controlador: otroControlador.
 */
Route::get('otraForma', [App\Http\Controllers\otroControlador::class,'unaAccion']);
Route::get('otraForma2', [App\Http\Controllers\otroControlador::class,'otraAccion']);