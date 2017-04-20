<?php

namespace App\Http\Middleware;

use Closure;

class boxing
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	public function handle($request, Closure $next, $role) {
		echo "name: ".$role;
		return $next($request);
	}
}
