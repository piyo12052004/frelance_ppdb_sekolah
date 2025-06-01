@extends('Main')

@section('title', $news->title)

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            @if($news->image)
                <div class="relative h-96">
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="object-cover w-full h-full">
                </div>
            @endif
            
            <div class="p-6">
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    {{ $news->published_date->format('d M Y') }}
                </div>

                <h1 class="text-3xl font-bold mb-4">{{ $news->title }}</h1>

                <div class="prose max-w-none">
                    {!! $news->content !!}
                </div>

                <div class="mt-8 pt-6 border-t">
                    <a href="{{ route('superadmin.news.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2">
                            <path d="M19 12H5M12 19l-7-7 7-7"/>
                        </svg>
                        Kembali ke Daftar Berita
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 