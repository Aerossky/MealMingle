@extends('layouts.admin.main')
@section('title', 'Universitas')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Universitas</h1>
        <div class="">
            <a href="{{ route('universitas.deletedData') }}"
                class="focus:outline-none text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Data
                Terhapus</a>

            <a href="{{ route('universitas.create') }}"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
                Universitas</a>
        </div>
    </div>

    {{-- Content --}}
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto">

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Universitas
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @if ($universitas->isEmpty())
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center">Tidak ada universitas yang tersedia.</td>
                        </tr>
                    @else
                        {{-- Loop Data --}}
                        @foreach ($universitas as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $data->universitas_name }}
                                </td>
                                <td class="px-6 py-4 flex gap-2">
                                    <a href="{{ route('universitas.edit', $data->id) }}"
                                        class="text-yellow-600 hover:text-yellow-900">Edit<span class="sr-only"></a>
                                    <form action="{{ route('universitas.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection
