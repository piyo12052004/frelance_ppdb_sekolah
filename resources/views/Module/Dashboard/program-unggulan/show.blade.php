@extends('Module.Dashboard.main')

@section('title', $program->title)

@section('content')
<div class="container py-12">
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <a href="{{ route('home') }}#program" class="text-blue-600 hover:text-blue-700 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Kembali ke Program Unggulan
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            @if($program->image)
                <div class="h-96 relative">
                    <img src="{{ asset($program->image) }}" alt="{{ $program->title }}" class="object-cover w-full h-full">
                </div>
            @endif

            <div class="p-8">
                <h1 class="text-3xl font-bold mb-4">{{ $program->title }}</h1>
                
                <div class="prose max-w-none">
                    {!! $program->description !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 