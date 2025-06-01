@extends('Module.Dashboard.main')

@section('title', 'Berita & Kegiatan')

@section('content')
<div class="container mx-auto px-4 py-36">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold mb-4">Berita & Kegiatan</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Temukan informasi terbaru tentang kegiatan, prestasi, dan perkembangan di sekolah kami.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($news as $item)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                @if($item->image)
                    <div class="relative h-48">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" class="object-cover w-full h-full">
                    </div>
                @else
                    <div class="relative h-48 bg-gray-200">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 text-gray-400">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                        </div>
                    </div>
                @endif

                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        {{ $item->published_date->format('d M Y') }}
                    </div>

                    <h2 class="text-xl font-semibold mb-2">{{ $item->title }}</h2>
                    <p class="text-gray-600 mb-4">
                        {{ Str::limit(strip_tags($item->content), 150) }}
                    </p>
                    <a href="{{ route('app.news.show', $item) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700">
                        Baca Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 ml-2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 text-gray-400 mx-auto mb-4">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada berita</h3>
                <p class="text-gray-500">Berita akan ditampilkan di sini.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $news->links() }}
    </div>
</div>
@endsection 