@extends('layouts.admin.main')
@section('title', 'Home Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">User</h1>
        <div class="">
            <a href="{{ route('user.create') }}"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
                User</a>
        </div>
    </div>

    {{-- Content --}}
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto text-center">
        <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50 ">
                <tr>
                    <th scope="col"
                        class="py-3 pl-4 pr-3 text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                        No</th>
                    <th scope="col"
                        class="py-3 pl-4 pr-3 text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                        Nama</th>
                    <th scope="col" class="px-3 py-3 text-xs font-medium uppercase tracking-wide text-gray-500">Email
                    </th>
                    <th scope="col" class="px-3 py-3 text-xs font-medium uppercase tracking-wide text-gray-500">
                        Status</th>
                    <th scope="col" class="px-3 py-3 text-xs font-medium uppercase tracking-wide text-gray-500">
                        Universitas
                    </th>
                    <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-6">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                {{-- DEV --}}
                @foreach ($user as $data)
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                            {{ $loop->iteration }}
                        </td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                            {{ $data->name }}
                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"> {{ $data->email }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
                            @if ($data->status == 'aktif')
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Aktif</span>
                            @elseif ($data->status == 'tidakaktif')
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Tidak
                                    Aktif</span>
                            @endif
                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $data->universitas->universitas }}
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="{{ route('user.show', $data->id) }}"
                                class="text-yellow-600 hover:text-yellow-900">Detail</a>

                            <a href="{{ route('user.edit', $data->id) }}"
                                class="text-yellow-600 hover:text-yellow-900">Edit<span class="sr-only"></a>
                            <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>
@endsection
