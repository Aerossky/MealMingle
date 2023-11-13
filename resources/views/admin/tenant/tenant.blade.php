@extends('layouts.admin.main')
@section('title', 'Tenant Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Tenant</h1>
        <div class="">
            <a href="/admin-tenant-add"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
                Tenant</a>
        </div>
    </div>

    {{-- Content --}}
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                        No</th>
                    <th scope="col"
                        class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                        Nama Tenant</th>
                    <th scope="col"
                        class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">Pemilik</th>
                    <th scope="col"
                        class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">Deskripsi</th>
                    <th scope="col"
                        class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">Foto</th>
                    <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-6">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                {{-- DEV --}}
                <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">1
                    </td>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Saijo
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Jovan</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Restoran jawa</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><img src="{{ asset('img/logo.png') }}"
                            alt="foto tenant" srcset="" height="80px" width="80px"></td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <a href="#" class="text-yellow-600 hover:text-yellow-900">Detail<span class="sr-only"></a>
                        <a href="#" class="text-yellow-600 hover:text-yellow-900">Edit<span class="sr-only"></a>
                        <a href="#" class="text-red-600 hover:text-red-900">Delete<span class="sr-only"></a>
                    </td>
                </tr>

                <!-- More people... -->

            </tbody>
        </table>

    </div>
@endsection
