<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = auth()->user();
        if (!$user || $user->role !== $role) {
            // Redirect to login or home if not authorized
            return redirect()->route('login')->withErrors(['login' => 'Akses ditolak, role tidak sesuai.']);
        }
        return $next($request);
    }
} 