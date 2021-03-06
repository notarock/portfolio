<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Http\Response;

class SoloAdmin
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(User::count() > 0){
			return new Response(view('errors.404'));
		}	    

		return $next($request);
	}
}
