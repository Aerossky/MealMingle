@extends('layouts.admin.main')
@section('title', 'Menu Edit Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Edit Menu</h1>
        <div class="">
            <a href=""
                class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>
        </div>
    </div>

    {{-- Content --}}
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto">
        <form action="{{ route('menu.update-menu', [$menu->id, $tenantId]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-2">
                <!-- Nama Tenant -->
                <div class="mb-4 col-span-1">
                    <label for="nama_makanan" class="block text-sm font-medium text-gray-600">Nama Makanan</label>
                    <input type="text" id="nama_makanan" name="nama_makanan" class="mt-1 p-2 w-full border rounded-md" value="{{ $menu->nama_makanan }}">
                </div>

                <!-- Harga -->
                <div class="mb-4 col-span-1">
                    <label for="harga_produk" class="block text-sm font-medium text-gray-600">Harga</label>
                    <input type="text" id="harga_produk" name="harga_produk" class="mt-1 p-2 w-full border rounded-md" value="{{ $menu->harga_produk }}">
                </div>

                <!-- Deskripsi -->
                <div class="mb-4 col-span-2">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
                </div>

                <!-- Foto -->
                <div class="mb-4 col-span-2">
                    <label for="foto_produk" class="block text-sm font-medium text-gray-600">Foto Produk</label>
                    <input type="file" id="foto_produk" name="foto_produk" class="mt-1">
                </div>

                <!-- Tombol Kirim -->
                <div class="mt-6">
                    <button type="submit"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                        Ubah
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
