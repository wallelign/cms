<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class age
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->age && $request->age<18){
            return redirect('n');
        }
        return $next($request);
    }
}
