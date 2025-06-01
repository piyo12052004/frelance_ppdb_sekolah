<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors([
                'login' => json_encode([
                    'success' => false,
                    'message' => 'Input dan password, harus di isi !!'
                ])
            ])->withInput();
        }

        $credentials = $request->only('username', 'password');
        Log::info('Attempting login with credentials', ['username' => $credentials['username']]);

        // Coba login dengan JWT
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            Log::info('Login failed', ['username' => $credentials['username']]);
            return redirect()->back()
                ->withErrors([
                    'login' => 'Username atau Password Anda salah'
                ])
                ->withInput();
        }

        $user = auth()->guard('api')->user();
        Log::info('Login successful', [
            'user_id' => $user->id,
            'username' => $user->username,
            'role' => $user->role
        ]);

        // Simpan token di session
        session(['jwt_token' => $token]);
        
        // Set user ke auth()->user()
        auth()->setUser($user);

        $userName = $user->name;

        // Cek role user
        if ($user->role === 'superadmin') {
            Log::info('User is superadmin, redirecting to dashboard');
            return redirect('/superadmin/dashboard')
                ->with('success', 'Berhasil login, Selamat Datang ' . $userName);
        }

        // Cek status user
        if ($user->status_users_id == 2) {
            return redirect()->route('berkasi.siswa.index')
                ->with('success', 'Berhasil login, Selamat Datang ' . $user->name);
        }

        if ($user->status_users_id == 1) {
            return redirect('/')
                ->with('success', 'Berhasil login, Selamat Datang ' . $userName);
        }
    }
}
