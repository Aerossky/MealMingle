@extends('layouts.admin.main')
@section('title', 'Home Admin')

@section('content')
    <div class=" items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Detail User</h1>
    </div>
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto max-w-lg">
        <form>
            <div class="grid grid-cols-2 gap-2 ">
                <!-- Nama -->
                <div class="mb-4 col-span-2">
                    <label for="name" class="block text-sm font-medium text-gray-600">Nama</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md"
                        value="{{ $user->name }}" readonly>
                </div>

                <!-- Email -->
                <div class="mb-4 col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md"
                        value="{{ $user->email }}" readonly>
                </div>

                <!-- Password (Jangan tampilkan dalam detail) -->

                <!-- Jenis Kelamin -->
                <div class="mb-4 col-span-2">
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-600">Jenis Kelamin</label>
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="mt-1 p-2 w-full border rounded-md"
                        value="{{ $user->jenis_kelamin }}" readonly>
                </div>

                <!-- Alamat -->
                <div class="mb-4 col-span-2">
                    <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                    <textarea id="alamat" name="alamat" class="mt-1 p-2 w-full border rounded-md resize-none" rows="4" readonly>{{ $user->alamat }}</textarea>
                </div>

                <!-- Universitas -->
                <div class="mb-4 col-span-2">
                    <label for="universitas_id" class="block text-sm font-medium text-gray-600">Universitas</label>
                    <input type="text" id="universitas_id" name="universitas_id"
                        class="mt-1 p-2 w-full border rounded-md" value="{{ $user->universitas->universitas }}" readonly>
                </div>
                <!-- Universitas -->
                <div class="mb-4 col-span-2">
                    <label for="role" class="block text-sm font-medium text-gray-600">Role</label>
                    <input type="text" id="role" name="role" class="mt-1 p-2 w-full border rounded-md"
                        value="{{ $user->role->role }}" readonly>
                </div>

            </div>
        </form>
    </div>

    <div class="mt-3">
        <a href="{{ route('user.index') }}"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>

    </div>



@endsection
