@extends('layouts.admin.main')
@section('title', 'Tenant Detail Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Tenant Detail</h1>
        <div class="">
            <a href="/admin-tenant-add"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
                Menu</a>
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
                            Nama Makanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Foto
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>

                        <td class="px-6 py-4">
                            Nasi Goreng
                        </td>
                        <td class="px-6 py-4">
                            Nasi goreng dengan rempah
                        </td>
                        <td class="px-6 py-4">
                            10.000
                        </td>
                        <td class="px-6 py-4">
                            <img src="{{ asset('img/logo.png') }}" alt="foto tenant" srcset="" height="80px"
                                width="80px">
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-yellow-600 hover:text-yellow-900">Edit<span class="sr-only"></a>
                            <a href="#" class="text-red-600 hover:text-red-900">Delete<span class="sr-only"></a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

@endsection
