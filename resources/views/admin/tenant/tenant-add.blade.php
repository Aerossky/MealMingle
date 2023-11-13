@extends('layouts.admin.main')
@section('title', 'Tenant Add Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Tambah Tenant</h1>
        <div class="">
            <a href=""
                class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>
        </div>
    </div>

    {{-- Content --}}
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto">
        <form>
            <div class="grid grid-cols-2 gap-2">
                <!-- Nama Tenant -->
                <div class="mb-4 col-span-1">
                    <label for="nama_tenant" class="block text-sm font-medium text-gray-600">Nama Tenant</label>
                    <input type="text" id="nama_tenant" name="nama_tenant" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- Pemilik -->
                <div class="mb-4 col-span-1">
                    <label for="pemilik" class="block text-sm font-medium text-gray-600">Pemilik</label>
                    <select id="pemilik" name="pemilik" class="mt-1 p-2 w-full border rounded-md">
                        <!-- Pilihan Pemilik -->
                        <option value="pemilik1">Pemilik 1</option>
                        <option value="pemilik2">Pemilik 2</option>
                        <option value="pemilik3">Pemilik 3</option>
                    </select>
                </div>

                <!-- Deskripsi -->
                <div class="mb-4 col-span-2">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
                </div>

                <!-- Gambar -->
                <div class="mb-4 col-span-2">
                    <label for="gambar" class="block text-sm font-medium text-gray-600">Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="mt-1">
                </div>

                <!-- Tombol Kirim -->
                <div class="mt-6">
                    <button type="submit"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                        Tambah
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection