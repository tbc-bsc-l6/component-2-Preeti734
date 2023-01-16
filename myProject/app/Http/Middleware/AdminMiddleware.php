<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        //if not authenticated user then redirect to 403 forbidden page
        if(!auth()->user()|| !auth()->user()->is_admin){
            abort(403);
        }
        // since in middleware return does not mean to return the value
        // from the function above it ask to return the next request in middleware
        return $next($request);
    }
}
