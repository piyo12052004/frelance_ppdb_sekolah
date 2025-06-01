@extends('Module.Dashboard.layouts.superadmin')

@section('title', 'Edit Pengguna')

@section('content')
<div class="container mx-auto">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Pengguna</h1>

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('superadmin.users.update', $user) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <!-- Profile Photo -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Foto Profil
                </label>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <div id="currentPhoto" class="{{ $user->profile_photo ? '' : 'hidden' }}">
                            <img src="{{ asset($user->profile_photo) }}" alt="Current Profile Photo" class="w-20 h-20 rounded-full object-cover border-2 border-gray-200">
                        </div>
                        <div id="initialPlaceholder" class="{{ $user->profile_photo ? 'hidden' : '' }} w-20 h-20 rounded-full bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500 text-2xl font-semibold">{{ substr($user->name, 0, 1) }}</span>
                        </div>
                        <div id="previewPhoto" class="hidden">
                            <img src="" alt="Preview" class="w-20 h-20 rounded-full object-cover border-2 border-gray-200">
                        </div>
                    </div>
                    <div class="flex-1">
                        <input type="file" name="profile_photo" id="profilePhotoInput" accept="image/*" class="block w-full text-sm text-gray-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-blue-50 file:text-blue-700
                            hover:file:bg-blue-100">
                        <p class="mt-1 text-sm text-gray-500">PNG, JPG atau JPEG (Max. 2MB)</p>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nama Lengkap
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                    id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') border-red-500 @enderror"
                    id="username" type="text" name="username" value="{{ old('username', $user->username) }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                    id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password Baru (kosongkan jika tidak ingin mengubah)
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                    id="password" type="password" name="password">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                    Konfirmasi Password Baru
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password_confirmation" type="password" name="password_confirmation">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
                    Role
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('role') border-red-500 @enderror"
                    id="role" name="role" required>
                    <option value="">Pilih Role</option>
                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="superadmin" {{ old('role', $user->role) == 'superadmin' ? 'selected' : '' }}>Superadmin</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Status
                </label>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" name="status" value="1" {{ old('status', $user->status) == '1' ? 'checked' : '' }} class="form-radio">
                        <span class="ml-2">Aktif</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" name="status" value="0" {{ old('status', $user->status) == '0' ? 'checked' : '' }} class="form-radio">
                        <span class="ml-2">Nonaktif</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Simpan Perubahan
                </button>
                <a href="{{ route('superadmin.users.index') }}" class="text-gray-600 hover:text-gray-800">
                    Kembali ke Daftar Pengguna
                </a>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
document.getElementById('profilePhotoInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            // Hide current photo and initial placeholder
            document.getElementById('currentPhoto').classList.add('hidden');
            document.getElementById('initialPlaceholder').classList.add('hidden');
            
            // Show and update preview
            const previewPhoto = document.getElementById('previewPhoto');
            previewPhoto.classList.remove('hidden');
            previewPhoto.querySelector('img').src = e.target.result;
        }
        reader.readAsDataURL(file);
    } else {
        // If no file selected, show original photo or initial
        document.getElementById('previewPhoto').classList.add('hidden');
        if (document.getElementById('currentPhoto').querySelector('img').src) {
            document.getElementById('currentPhoto').classList.remove('hidden');
        } else {
            document.getElementById('initialPlaceholder').classList.remove('hidden');
        }
    }
});
</script>
@endpush
@endsection 