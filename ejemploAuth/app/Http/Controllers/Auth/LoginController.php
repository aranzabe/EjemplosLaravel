<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth; //--> Esto es necesario si queremos realizar la autenticación personalmente en lugar de delegar a los métodos generados automáticamente.

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
     * Este middleware se encuuentra en: vendor/laravel/framework/src/Illuminate\Auth\Middleware\Authenticate
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

//    Personalizar usuario.
//    Por defecto, Laravel utiliza el campo email para la autenticación. Si deseas modificar esto, puedes definir un método username en LoginController:
//    public function username() {
//        return 'username';
//    }
    
    
    /**
    * Handle an authentication attempt.
    * Este método lo usamos para realizar la autenticación manualmente.
    * @param  \Illuminate\Http\Request $request
    *
    * @return Response
    */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
    /*
     * El método attempt acepta un vector de pares llave / valor como primer argumento. Los valores en el vector serán utilizados para encontrar el 
     * usuario en la tabla de tu base de datos. Así que, en el ejemplo anterior, el usuario se obtiene por el valor de la columna email. Si se encuentra
     * el usuario, la contraseña encriptada obtenida de la base de datos será comparada con el valor password pasado al método en el arreglo. No debes 
     * encriptar la contraseña especificada para el valor password, ya que el framework automáticamente va a encriptarlo antes de compararlo con la 
     * contraseña almacenada en la base de datos. Si las dos contraseñas encriptadas coinciden, se iniciará una sesión autenticada para el usuario.
     * 
     * El método attempt va a devolver true si la autenticación fue exitosa. De otra forma, devolverá false.
     * 
     * El método intended del redireccionador va a redirigir al usuario a la URL que intentaba acceder antes de ser interceptado por el middleware 
     * de autenticación. Una URI de fallback puede ser proporcionada al método en caso de que el destino solicitado no esté disponible.
     */

    /*
     * Especificar condiciones adicionales.
     * Si lo deseas, puedes agregar condiciones extras a la consulta de autenticación además del correo electrónico del usuario y su contraseña. 
     * Por ejemplo, podemos verificar que un usuario esté marcado como «active»:
     * 
     * if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
     *    // The user is active, not suspended, and exists.
     * }
     */
    
    /*
     * Recordar usuarios.
     * Si desea proporcionar la funcionalidad de «recordar datos» en tu aplicación, puedes pasar un valor booleano como segundo argumento al método attempt, 
     * que mantendrá al usuario autenticado indefinidamente, o hasta que cierre su sesión manualmente. Tu tabla users deberá incluir una columna de tipo 
     * string llamada remember_token, que será utilizada para almacenar el token «recordar datos».
     * 
     * if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
     *     // The user is being remembered...
     * }
     * Si estás utilizando el LoginController integrado en tu instalación de Laravel, la lógica apropiada para «recordar» usuarios ya se encontrará 
     * implementada por los traits utilizados por el controlador.
     */
   
}
