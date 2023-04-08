<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if($role == 'admin' && auth()->user()->role_id == 1)
        {
            return $next($request);
        }
        if($role == 'pegawai' && auth()->user()->role_id == 2)
        {
            return $next($request);
        }
        abort(403);
        
    }
}
