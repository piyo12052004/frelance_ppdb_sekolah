<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('Module.Dashboard.users.index', compact('users'));
    }

    public function create()
    {
        return view('Module.Dashboard.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'role' => ['required', 'string', 'in:admin,superadmin'],
            'status' => ['required', 'boolean'],
            'profile_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048']
        ]);

        $userData = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,
            'is_aktif' => $request->status,
            'kode_eksternal' => 'ADMIN',
            'status_users_id' => 1
        ];

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $photo = $request->file('profile_photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('images/profiles'), $photoName);
            $userData['profile_photo'] = 'images/profiles/' . $photoName;
        }

        User::create($userData);

        return redirect()->route('superadmin.users.index')
            ->with('success', 'Pengguna berhasil ditambahkan');
    }

    public function edit(User $user)
    {
        return view('Module.Dashboard.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'confirmed', Password::defaults()],
            'role' => ['required', 'string', 'in:admin,superadmin'],
            'status' => ['required', 'boolean'],
            'profile_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048']
        ]);

        $userData = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
            'is_aktif' => $request->status
        ];

        if (!empty($request->password)) {
            $userData['password'] = Hash::make($request->password);
        }

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            // Delete old photo if exists
            if ($user->profile_photo) {
                $oldPhotoPath = public_path($user->profile_photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }

            // Store new photo
            $photo = $request->file('profile_photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('images/profiles'), $photoName);
            $userData['profile_photo'] = 'images/profiles/' . $photoName;
        }

        $user->update($userData);

        return redirect()->route('superadmin.users.index')
            ->with('success', 'Pengguna berhasil diperbarui');
    }

    public function destroy(User $user)
    {
        if ($user->id === auth()->id()) {
            return redirect()->route('superadmin.users.index')
                ->with('error', 'Tidak dapat menghapus akun sendiri');
        }

        $user->delete();

        return redirect()->route('superadmin.users.index')
            ->with('success', 'Pengguna berhasil dihapus');
    }
} 