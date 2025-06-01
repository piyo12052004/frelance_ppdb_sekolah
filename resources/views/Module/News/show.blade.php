@extends('../../main')

@section('title', $news->title)

@section('content')
<div class="py-16">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <!-- Breadcrumb -->
            <nav class="mb-8">
                <ol class="flex items-center space-x-2 text-sm">
                    <li>
                        <a href="{{ route('app.news.index') }}" class="text-blue-600 hover:text-blue-800">Berita</a>
                    </li>
                    <li class="text-gray-500">/</li>
                    <li class="text-gray-500">{{ $news->title }}</li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ $news->title }}</h1>
                <div class="flex items-center text-gray-600 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span>{{ $news->published_date->format('d M Y') }}</span>
                </div>
            </header>

            <!-- Featured Image -->
            @if($news->image)
                <div class="mb-8 rounded-lg overflow-hidden">
                    <img src="{{ asset($news->image) }}" alt="{{ $news->title }}" class="w-full h-auto">
                </div>
            @endif

            <!-- Article Content -->
            <article class="prose prose-lg max-w-none mb-12">
                {!! $news->content !!}
            </article>

            <!-- Share Buttons -->
            <div class="border-t border-b py-4 mb-12">
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Bagikan artikel ini:</span>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                           target="_blank" 
                           class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($news->title) }}" 
                           target="_blank" 
                           class="text-blue-400 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($news->title . ' ' . request()->url()) }}" 
                           target="_blank" 
                           class="text-green-600 hover:text-green-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Related News -->
            @if($relatedNews->count() > 0)
                <div class="mt-12">
                    <h2 class="text-2xl font-bold mb-6">Berita Terkait</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($relatedNews as $related)
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
                                <div class="h-48 relative">
                                    @if($related->image)
                                        <img src="{{ asset($related->image) }}" alt="{{ $related->title }}" class="object-cover w-full h-full">
                                    @else
                                        <img src="https://via.placeholder.com/600x400?text=No+Image" alt="{{ $related->title }}" class="object-cover w-full h-full">
                                    @endif
                                    <div class="absolute top-0 left-0 bg-blue-600 text-white px-3 py-1 text-sm">
                                        {{ $related->published_date->format('d M Y') }}
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3 class="font-bold text-lg mb-2">{{ $related->title }}</h3>
                                    <p class="text-gray-600 mb-4 line-clamp-2">
                                        {{ Str::limit(strip_tags($related->content), 100) }}
                                    </p>
                                    <a href="{{ route('app.news.show', $related->slug) }}" class="text-blue-600 font-medium flex items-center">
                                        Baca selengkapnya
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 h-4 w-4">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 