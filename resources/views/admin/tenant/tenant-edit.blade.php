@extends('layouts.admin.main')
@section('title', 'Tenant Edit')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Edit Tenant</h1>
        <div class="">
            <a href="{{ route('tenant.index') }}"
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
        <form action="{{ route('tenant.update', $tenant->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="grid grid-cols-2 gap-2">
                <div class="mb-4 col-span-2">
                    <label for="nama_tenant" class="block text-sm font-medium text-gray-600">Nama Tenant</label>
                    <input type="text" id="nama_tenant" name="nama_tenant" class="mt-1 p-2 w-full border rounded-md"
                        value="{{ old('nama_tenant', $tenant->nama_tenant) }}">
                </div>

                <div class="mb-4 col-span-2">
                    <label for="user_id" class="block text-sm font-medium text-gray-600">Pemilik</label>
                    <select selected="{{ $tenant->user_id }}" id="user_id" name="user_id" class="mt-1 p-2 w-full border rounded-md">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4 col-span-2">
                    <label for="universitas_id" class="block text-sm font-medium text-gray-600">Universitas</label>
                    <select id="universitas_id" name="universitas_id[]" multiple class="mt-1 p-2 w-full border rounded-md">
                        @foreach ($universitas as $uni)
                            <option value="{{ $uni->id }}">{{ $uni->universitas_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4 col-span-2">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi" class="mt-1 p-2 w-full border rounded-md"
                        value="{{ old('deskripsi', $tenant->deskripsi) }}">
                </div>

                <div class="mb-4 col-span-2">
                    <label for="foto_tenant" class="block text-sm font-medium text-gray-600">Gambar</label>
                    <input type="file" id="foto_tenant" name="foto_tenant" class="mt-1" />
                </div>

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
