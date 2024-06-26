@extends('layouts.admin.main')
@section('title', 'Kategori Edit')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Edit Kategori</h1>
        <div class="">
            <a href="{{ route('kategori.index') }}"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>
        </div>
    </div>

    {{-- error validation request --}}
    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Content --}}
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="post" method="POST">
            @csrf
            @method('put')
            <div class="grid grid-cols-2 gap-2">
                <!-- Nama Universitas -->
                <div class="mb-4 col-span-2">
                    <label for="nama_kategori" class="block text-sm font-medium text-gray-600">Kategori</label>
                    <input type="text" id="nama_kategori" name="nama_kategori" class="mt-1 p-2 w-full border rounded-md"
                        value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
                </div>

                <!-- Tombol Kirim -->
                <div class="">
                    <button type="submit"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                        Perbarui
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
