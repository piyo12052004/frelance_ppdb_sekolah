@extends('Module.Dashboard.layouts.superadmin')

@section('title', 'Galeri')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Galeri</h1>
        <a href="{{ route('superadmin.gallery.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah Foto
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($galleries as $gallery)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $gallery->title }}</h3>
                    @if($gallery->description)
                        <p class="text-gray-600 text-sm mb-4">{{ $gallery->description }}</p>
                    @endif
                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('superadmin.gallery.edit', $gallery) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <button onclick="openDeleteModal({{ $gallery->id }}, '{{ $gallery->title }}', 'foto', '{{ route('superadmin.gallery.destroy', $gallery) }}')" class="text-red-600 hover:text-red-900">Hapus</button>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-8 text-gray-500">
                Belum ada foto dalam galeri
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $galleries->links() }}
    </div>
</div>

@include('Module.Dashboard.Partials.delete-modal')
@endsection

@push('scripts')
<script>
    function openDeleteModal(id, title, type, route) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');
        const titleSpan = document.getElementById('galleryTitle');
        
        form.action = route;
        titleSpan.textContent = title;
        modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });

    // Close modal with escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
        }
    });
</script>
@endpush 