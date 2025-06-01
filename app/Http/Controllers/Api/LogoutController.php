<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //remove token
        $removeToken = JWTAuth::invalidate(JWTAuth::getToken());

        if($removeToken) {
            // Clear the session
            session()->forget('jwt_token');
            auth()->logout();
            
            // Redirect to login page with success message
            return redirect()->route('login')
                ->with('success', 'Berhasil logout!');
        }

        // If token removal fails, still redirect to login
        return redirect()->route('login')
            ->withErrors(['login' => 'Gagal logout, silakan coba lagi.']);
    }
}
