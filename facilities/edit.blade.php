@extends('Module.Dashboard.layouts.superadmin')

@section('title', 'Edit Fasilitas')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-6">Edit Fasilitas</h2>

        <form action="{{ route('superadmin.facility.update', $facility) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Fasilitas</label>
                <input type="text" name="name" id="name" value="{{ old('name', $facility->name) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category" id="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    <option value="akademik" {{ old('category', $facility->category) == 'akademik' ? 'selected' : '' }}>Akademik</option>
                    <option value="olahraga" {{ old('category', $facility->category) == 'olahraga' ? 'selected' : '' }}>Olahraga</option>
                    <option value="teknologi" {{ old('category', $facility->category) == 'teknologi' ? 'selected' : '' }}>Teknologi</option>
                    <option value="penunjang" {{ old('category', $facility->category) == 'penunjang' ? 'selected' : '' }}>Penunjang</option>
                </select>
                @error('category')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ old('description', $facility->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Gambar Saat Ini</label>
                @if($facility->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->name }}" class="h-32 w-32 object-cover rounded-lg">
                    </div>
                @else
                    <p class="mt-2 text-sm text-gray-500">Tidak ada gambar</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Ganti Gambar (Opsional)</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full" accept="image/*">
                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-4">
                <a href="{{ route('superadmin.facility.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection 