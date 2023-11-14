@extends('layouts.admin.main')
@section('title', 'Universitas Deleted')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Universitas Deleted Data</h1>
        <div class="flex">
            <a href="{{ route('universitas.create') }}"
                class="focus:outline-none text-white bg-redeb-500 hover:bg-redeb-400 focus:ring-4 focus:ring-redeb-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>
            <div class="">
                <a href="{{ route('universitas.index') }}"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>
            </div>
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

                    {{-- Loop Data --}}
                    @foreach ($universitas as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>

                            <td class="px-6 py-4">
                                {{ $data->universitas }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('universitas.restore', $data->id) }}"
                                    class="text-yellow-600 hover:text-yellow-900">Restore<span class="sr-only"></a>

                                <a href="{{ route('universitas.forceDelete', $data->id) }}"
                                    class="text-red-600 hover:text-red-900">Delete<span class="sr-only"></a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
