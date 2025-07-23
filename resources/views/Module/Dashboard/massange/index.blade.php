@extends('Module.Dashboard.layouts.superadmin')

@section('title', 'Pesan')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-2xl font-semibold text-gray-900">PESAN</h1>
            <p class="mt-2 text-sm text-gray-700">Pesan dan Kritik</p>
        </div>
        {{-- <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{ route('superadmin.program-unggulan.create') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:w-auto">
                Tambah Program
            </a>
        </div> --}}
    </div>

    @if(session('success'))
        <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif


    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">No</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nama</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Subjek</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Pesan</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Balasan</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @forelse ($massanges as $item)
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-900 sm:pl-6">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{ $item->name }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{ $item->email }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{ $item->subject }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{ $item->message }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">
                                        {{ $item->balasan ?? '-' }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">
                                        @if (!$item->balasan)
                                            <form action="{{ route('superadmin.massange.update', $item->id) }}" method="POST">

                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <div>
                                                    <textarea name="balasan" rows="1" class="w-full border rounded p-2 text-sm" placeholder="Tulis balasan..."></textarea><br>
                                                </div>
                                                <div>
                                                    <button type="submit" style="width: 100%;" class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1 rounded">
                                                        Balas
                                                    </button>
                                                </div>
                                            </form>
                                        @else
                                            <span class="text-green-600 font-medium">Sudah dibalas</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="py-4 px-3 text-sm text-center text-gray-500">
                                        Belum ada pesan masuk.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="bg-white px-4 py-3 border-t border-gray-200">
                        {{ $massanges->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="mt-6">
        {{ $programs->links() }}
    </div> --}}
</div>
@endsection
