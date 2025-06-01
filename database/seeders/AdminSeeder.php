<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'status_users_id' => 1,
            'is_aktif' => true,
            'kode_eksternal' => 'ADMIN',
            'role' => 'superadmin'
        ]);
    }
} 