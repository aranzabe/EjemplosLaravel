<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    /*
     * Añadido para la protección de rutas.
     */

//    public function login(Request $request) {
//        return response()->json(['aqui' => $request->email]);
//        //$this->validateLogin($request);
//
//        $credentials = request(['email', 'password']);
////        if ($this->attemptLogin($request)) {
//        return response()->json($credentials);
//        if (!\Auth::attempt($credentials)) {
//            return response()->json([
//                        'message' => 'Unauthorized'
//                            ], 401);
//        }
//        $user = $this->guard()->user();
//        //$user->generateToken();
//
//        return response()->json([
//                    'data' => $user->toArray(),
//        ]);
//    }

    public function logout(Request $request) {
        $request->user()->token()->revoke();
        return response()->json(['message' =>
                    'Successfully logged out']);
    }

}
