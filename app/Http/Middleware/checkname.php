<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkname
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        if($request->input("name")){
            $name = $request->input("name");
            if($name == 'my-super-middleware'){
                return $next($request);
            }
            else{
                return redirect("mistake");
            }
        }
        return $next($request);
    }
}
