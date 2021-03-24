<?php

namespace App\Http\Middleware;

use Closure;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$jabatan_id)
    {
        if(in_array($request -> user() -> jabatan_id, $jabatan_id)){
            return $next($request);
        }
        return redirect ('/');
    }
}
