    @extends('Module.Dashboard.layouts.superadmin')


    @section('title', 'Edit Berita')

    @section('content')
    <div class="py-16">
        <div class="container">
            <div class="max-w-4xl mx-auto">
                <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold">Edit Berita</h1>
                    <a href="{{ route('superadmin.news.index') }}" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    Kembali ke Daftar Berita
                    </a>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <form action="{{ route('superadmin.news.update', $news->slug) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="space-y-2">
                            <label for="title" class="text-sm font-medium">Judul Berita</label>
                            <input type="text" id="title" name="title" value="{{ old('title', $news->title) }}" 
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 @error('title') border-red-500 @enderror"
                                required>
                            @error('title')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="content" class="text-sm font-medium">Konten Berita</label>
                            <textarea id="content" name="content" rows="10" 
                                class="flex min-h-[120px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 @error('content') border-red-500 @enderror"
                                required>{{ old('content', $news->content) }}</textarea>
                            @error('content')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="image" class="text-sm font-medium">Gambar Berita</label>
                            @if($news->image)
                                <div class="mb-4">
                                    <img src="{{ asset($news->image) }}" alt="Current image" class="w-48 h-48 object-cover rounded-lg">
                                    <p class="text-sm text-gray-500 mt-2">Gambar saat ini</p>
                                </div>
                            @endif
                            <input type="file" id="image" name="image" accept="image/*"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 @error('image') border-red-500 @enderror">
                            <p class="text-sm text-gray-500">Format yang didukung: JPG, JPEG, PNG, GIF. Maksimal 2MB</p>
                            @error('image')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="published_date" class="text-sm font-medium">Tanggal Publikasi</label>
                            <input type="date" id="published_date" name="published_date" value="{{ old('published_date', $news->published_date->format('Y-m-d')) }}"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 @error('published_date') border-red-500 @enderror"
                                required>
                            @error('published_date')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', $news->is_published) ? 'checked' : '' }}
                                class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <label for="is_published" class="text-sm font-medium">Publish sekarang</label>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <form action="{{ route('superadmin.news.destroy', $news->slug) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-red-600 text-red-600 hover:bg-red-50 h-10 px-4 py-2">
                                    Hapus Berita
                                </button>
                            </form>
                            <button type="submit" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-white hover:bg-blue-700 h-10 px-4 py-2">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection 