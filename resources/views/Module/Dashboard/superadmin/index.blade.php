@extends('Module.Dashboard.layouts.superadmin')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-6">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
        <div class="flex space-x-4">
            <span class="text-sm text-gray-600">Welcome back, {{ auth()->user()?->name ?? 'Admin' }}</span>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total News -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-gray-600 text-sm">Total Berita</h2>
                    <p class="text-2xl font-semibold text-gray-800">{{ $totalNews }}</p>
                </div>
            </div>
        </div>

        <!-- Total Gallery -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-gray-600 text-sm">Total Galeri</h2>
                    <p class="text-2xl font-semibold text-gray-800">{{ $totalGallery }}</p>
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-gray-600 text-sm">Total Pengguna</h2>
                    <p class="text-2xl font-semibold text-gray-800">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>

        <!-- Total Students -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-gray-600 text-sm">Total Siswa</h2>
                    <p class="text-2xl font-semibold text-gray-800">{{ $totalStudents }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Access Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- News Management -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Manajemen Berita</h3>
            <div class="space-y-4">
                <a href="{{ route('superadmin.news.create') }}" class="block w-full text-center bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    Tambah Berita Baru
                </a>
                <a href="{{ route('superadmin.news.index') }}" class="block w-full text-center bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">
                    Lihat Semua Berita
                </a>
            </div>
        </div>

        <!-- Gallery Management -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Manajemen Galeri</h3>
            <div class="space-y-4">
                <a href="{{ route('superadmin.gallery.create') }}" class="block w-full text-center bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                    Tambah Foto Baru
                </a>
                <a href="{{ route('superadmin.gallery.index') }}" class="block w-full text-center bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">
                    Lihat Semua Foto
                </a>
            </div>
        </div>

        <!-- User Management -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Manajemen Pengguna</h3>
            <div class="space-y-4">
                <a href="{{ route('superadmin.users.create') }}" class="block w-full text-center bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">
                    Tambah Pengguna Baru
                </a>
                <a href="{{ route('superadmin.users.index') }}" class="block w-full text-center bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">
                    Lihat Semua Pengguna
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 