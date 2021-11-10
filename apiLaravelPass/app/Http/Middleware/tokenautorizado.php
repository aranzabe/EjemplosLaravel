<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class tokenautorizado {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        $credentials = request(['email', 'password']);
//        if ($this->attemptLogin($request)) {
        return response()->json($credentials);
        if (!\Auth::attempt($credentials)) {
            $user = \Auth::user();
            return response()->json($user);
            if ($user->api_token === $request->get('token')) {
                return $next($request);
            }
        } else {
            return response()->json([
                        'message' => 'Unauthorized'
                            ], 401);
        }
    }

}
