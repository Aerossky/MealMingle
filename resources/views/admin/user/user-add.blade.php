@extends('layouts.admin.main')
@section('title', 'User Add')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Tambah User</h1>
        <div class="">
            <a href="{{ route('user.index') }}"
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
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-2">
                <!-- Nama -->
                <div class="mb-4 col-span-2">
                    <label for="name" class="block text-sm font-medium text-gray-600">Nama</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <!-- Email -->
                <div class="mb-4 col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <!-- password -->
                <div class="mb-4 col-span-2">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md"
                        required>
                </div>

                <!-- Jenis Kelamin -->
                <div class="mb-4 col-span-2">
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-600">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 p-2 w-full border rounded-md">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <!-- Alamat -->
                <div class="mb-4 col-span-2">
                    <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- Nama Universitas -->
                <div class="mb-4 col-span-2">
                    <label for="universitas_id" class="block text-sm font-medium text-gray-600">Universitas</label>
                    <select id="universitas_id" name="universitas_id" class="mt-1 p-2 w-full border rounded-md">
                        <option value="" disabled selected>Pilih Universitas</option>
                        @foreach ($universitas as $data)
                            <option value="{{ $data->id }}">{{ $data->universitas }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tombol Kirim -->
                <div class="">
                    <button type="submit"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                        Tambah
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
