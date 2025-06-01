@extends('Module.Dashboard.layouts.superadmin')

@section('title', 'Tambah Foto Galeri')

@section('content')
<div class="container mx-auto">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Tambah Foto Galeri</h1>

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('superadmin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Judul Foto
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror"
                    id="title" type="text" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                    Kategori
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('category') border-red-500 @enderror"
                    id="category" name="category" required>
                    <option value="">Pilih Kategori</option>
                    <option value="kegiatan" {{ old('category') == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                    <option value="fasilitas" {{ old('category') == 'fasilitas' ? 'selected' : '' }}>Fasilitas</option>
                    <option value="prestasi" {{ old('category') == 'prestasi' ? 'selected' : '' }}>Prestasi</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Deskripsi
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                    id="description" name="description" rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Foto
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror"
                    id="image" type="file" name="image" accept="image/*" required>
                <p class="text-gray-600 text-xs italic mt-1">Format yang didukung: JPG, JPEG, PNG, GIF. Maksimal 2MB</p>
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Simpan Foto
                </button>
                <a href="{{ route('superadmin.gallery.index') }}" class="text-gray-600 hover:text-gray-800">
                    Kembali ke Galeri
                </a>
            </div>
        </form>
    </div>
</div>
@endsection 