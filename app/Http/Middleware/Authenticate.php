<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if(session()->get('isLogged') == null && session('userId') == null){
            return redirect()->route('auth.login')->with('error', 'Please login!!');
        }
        
        if(session()->get('role') != $role){
            return redirect()->route('auth.login')->with('error', 'You don`t have access!!');
        }
        return $next($request);
    }
}
