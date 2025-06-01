@extends('Module.Dashboard.layouts.superadmin')

@section('title', 'Tambah Program Unggulan')

@section('content')
<div class="container mx-auto">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Tambah Program Unggulan</h1>

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('superadmin.program-unggulan.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <!-- Image Upload -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Gambar Program
                </label>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <div id="initialPlaceholder" class="w-32 h-32 rounded-lg bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500 text-2xl font-semibold">?</span>
                        </div>
                        <div id="previewPhoto" class="hidden">
                            <img src="" alt="Preview" class="w-32 h-32 rounded-lg object-cover border-2 border-gray-200">
                        </div>
                    </div>
                    <div class="flex-1">
                        <input type="file" name="image" id="imageInput" accept="image/*" class="block w-full text-sm text-gray-500
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
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Judul Program
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror"
                    id="title" type="text" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Deskripsi Program
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                    id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="order">
                    Urutan Tampilan
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('order') border-red-500 @enderror"
                    id="order" type="number" name="order" value="{{ old('order', 0) }}" min="0" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Status
                </label>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" name="is_active" value="1" {{ old('is_active', '1') == '1' ? 'checked' : '' }} class="form-radio">
                        <span class="ml-2">Aktif</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" name="is_active" value="0" {{ old('is_active') == '0' ? 'checked' : '' }} class="form-radio">
                        <span class="ml-2">Nonaktif</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Simpan Program
                </button>
                <a href="{{ route('superadmin.program-unggulan.index') }}" class="text-gray-600 hover:text-gray-800">
                    Kembali ke Daftar Program
                </a>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
document.getElementById('imageInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            // Hide initial placeholder
            document.getElementById('initialPlaceholder').classList.add('hidden');
            
            // Show and update preview
            const previewPhoto = document.getElementById('previewPhoto');
            previewPhoto.classList.remove('hidden');
            previewPhoto.querySelector('img').src = e.target.result;
        }
        reader.readAsDataURL(file);
    } else {
        // If no file selected, show initial placeholder
        document.getElementById('previewPhoto').classList.add('hidden');
        document.getElementById('initialPlaceholder').classList.remove('hidden');
    }
});
</script>
@endpush
@endsection 