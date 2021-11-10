<?php

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

//La ruta de Auth es: vendor/laravel/framework/src/Illuminate/Support/Facades/Auth.php
/*
 * Las rutas que define automáticamente aquí el sistema de autenticación están en:
 * vendor/laravel/framework/src/Illuminate/Routing/Router.php , en el método auth():
 */
Auth::routes();


/*
 * A su vez dentro del facade Auth cuya ruta es vendor/laravel/framework/src/Illuminate/Support/Facades/Auth.php 
 * también podemos visualizar el contenido del método routes().
 * Aquí observaremos que este método routes()delega al métodoa uth()del objetorouter que es cargado con el 
 * contenedor de inyección de dependencias de Laravel.
 * Para visualizar el contenido de este objeto router, debemos  dirigirnos a la clase Router cuya ruta es: 
 * vendor/laravel/framework/src/Illuminate/Routing/Router.php.. 
 * Una vez aquí, podemos revisar la declaración del método auth() junto con todas las rutas que se definen 
 * allí:
 * public function auth(array $options = [])
{
    // Authentication Routes...
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');
    // Registration Routes...
    if ($options['register'] ?? true) {
        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        $this->post('register', 'Auth\RegisterController@register');
    }
    // Password Reset Routes...
    if ($options['reset'] ?? true) {
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
     }
    // Email Verification Routes...
    if ($options['verify'] ?? false) {
        $this->emailVerification();
    }
}
 */
//Si quisieramos ocultar el módulo de registro:
//Auth::routes(['register' => false]);

/*
 * Personalizando las URLs del módulo de registro en Laravel
 * Si nosotros quisiéramos personalizar aún más las rutas al módulo de registro, por ejemplo llamarla 
 * en español www.styde-auth/registro en lugar de www.styde-auth/register, podemos hacerlo en el código 
 * directamente. Pero no es una buena práctica hacerlo desde la clase Router del Framework puesto que 
 * perderíamos estos cambios cada vez que ejecutemos el comando composer update.
 * 
 * La idea es copiar las líneas de código de éste método directamente en el archivo routes/web.php, 
 * reemplazando así completamente el llamado del facade Auth::routes()por la declaración manual de todas 
 * estas rutas.
 * 
 * 
 * Una vez que hayamos copiado las rutas, todavía debemos reemplazar el llamado a $this->, puesto que ya no estamos dentro de la clase Router, por el facade Route::.  Tampoco necesitamos los condicionales, así que también podemos eliminarlos para simplificar el código.
 * El archivo routes/web.php luciría de la siguiente forma:
 */

// Authentication Routes...
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
//
//// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
//
//// Email Verification Routes...
//Route::emailVerification();


/*
 * Ahora, si quisiéramos desactivar el módulo de registros tal como hicimos anteriormente, solamente 
 * tenemos que eliminar las rutas asociadas al módulo de registro.
 */


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
 * Autenticación básica.
 * La autenticación HTTP básica proporciona una manera rápida de autenticar usuarios en tu aplicación sin configurar una página de «login» dedicada. 
 * Para iniciar, adjunta el middleware auth.basic a tu ruta. El middleware auth.basic está incluido en el framework de Laravel, por lo que no hay 
 * necesidad de definirlo:
 */
Route::get('autenticacionbasica', function () {
    echo 'Autenticado';
    //Auth::logout();
})->middleware('auth.basic');

Route::get('unaRuta',[App\Http\Controllers\miControlador::class,'index'])->middleware(['auth','administradores']);
Route::get('otraRuta',[App\Http\Controllers\miControlador::class,'otroIndex'])->middleware('auth');
/*
 * Bibliografía:
 * https://styde.net/laravel-6-doc-autenticacion/
 * https://cvallejo.medium.com/autenticaci%C3%B3n-y-manejo-de-roles-de-usuarios-en-laravel-7-50aa79fa1bed
 * https://laravel.com/docs/8.x/eloquent
 */