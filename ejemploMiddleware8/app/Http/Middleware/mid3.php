<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class mid3 {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        if (3 == 3) {
            return $next($request);
        } else {
            abort(518);
        }
    }

}
