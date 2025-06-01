<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;
use Exception;
use Illuminate\Support\Facades\Log;

class VerifyJwtToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $token = session('jwt_token');
            Log::info('Verifying JWT token', ['token_exists' => !empty($token)]);

            if (!$token) {
                Log::info('No token found in session');
                return redirect('/login')->withErrors(['login' => 'Akses ditolak, token tidak ada.']);
            }

            $user = JWTAuth::setToken($token)->authenticate();
            Log::info('Token verification result', [
                'user_exists' => !empty($user),
                'user_id' => $user ? $user->id : null,
                'user_role' => $user ? $user->role : null
            ]);

            if (!$user) {
                Log::info('Invalid token');
                return redirect('/login')->withErrors(['login' => 'Token tidak valid.']);
            }

            // Set user ke auth()->user()
            auth()->setUser($user);
            Log::info('User set in auth', ['user_id' => $user->id]);

            return $next($request);
        } catch (Exception $e) {
            Log::error('JWT verification error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect('/login')->withErrors(['login' => 'Token tidak valid atau expired.']);
        }
    }
}
