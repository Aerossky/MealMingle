@extends('layouts.admin.main')
@section('title', 'User Add')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Edit User</h1>
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
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="grid grid-cols-2 gap-2">
                <!-- Nama -->
                <div class="mb-4 col-span-2">
                    <label for="name" class="block text-sm font-medium text-gray-600">Nama</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md"
                        value="{{ old('name', $user->name) }}" required>
                </div>

                <!-- Email -->
                <div class="mb-4 col-span-2">
                    <label for="phone_number" class="block text-sm font-medium text-gray-600">Nomor Telepon</label>
                    <input type="number" id="phone_number" name="phone_number" class="mt-1 p-2 w-full border rounded-md"
                        value="{{ old('phone_number', $user->phone_number) }}" required>
                </div>

                <!-- password -->
                <div class="mb-4 col-span-2">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md"
                        placeholder="******">
                </div>

                {{-- status --}}
                <div class="mb-4 col-span-2">
                    <label for="status" class="block text-sm font-medium text-gray-600">Status</label>
                    <select id="status" name="status" class="mt-1 p-2 w-full border rounded-md">
                        <option value="aktif" {{ $user->status === 'aktif' ? 'selected' : '' }}>
                            Aktif
                        </option>
                        <option value="tidakaktif" {{ $user->status === 'tidakaktif' ? 'selected' : '' }}>
                            Tidak Aktif
                        </option>
                    </select>
                </div>


                <!-- Nama Universitas -->
                <div class="mb-4 col-span-2">
                    <label for="universitas_id" class="block text-sm font-medium text-gray-600">Universitas</label>
                    <select id="universitas_id" name="universitas_id" class="mt-1 p-2 w-full border rounded-md">
                        @if (old('universitas') !== null)
                            <option value="{{ old('universitas') }}" selected>
                                {{ $user->universitas->universitas_name }}
                            </option>
                        @else
                            <option value="{{ $user->universitas_id }}" selected>
                                {{ $user->universitas->universitas_name }}
                            </option>
                        @endif
                        @foreach ($universitas as $data)
                            <option value="{{ $data->id }}">{{ $data->universitas_name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Role -->
                <div class="mb-4 col-span-2">
                    <label for="role_id" class="block text-sm font-medium text-gray-600">Role</label>
                    <select id="role_id" name="role_id" class="mt-1 p-2 w-full border rounded-md">
                        @if (old('role_id') !== null)
                            <option value="{{ old('role_id') }}" selected>
                                {{ $user->role->role }}
                            </option>
                        @else
                            <option value="{{ $user->role_id }}" selected>
                                {{ $user->role->role }}
                            </option>
                        @endif
                        @foreach ($role as $data)
                            <option value="{{ $data->id }}">{{ $data->role }}</option>
                        @endforeach
                    </select>
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
