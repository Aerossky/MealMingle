@extends('layouts.admin.main')
@section('title', 'Tenant Detail Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Menu Detail / <span class="text-merah hover:text-red-800"><a
                    href="{{ route('tenant.index') }}">Kembali</a></span>
        </h1>
        <div class="">
            <a href="{{ route('menu.deletedData', $tenantId) }}"
                class="focus:outline-none text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Data
                Terhapus</a>

            <a href="{{ route('menu.add-menu', $tenantId) }}"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow  -500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
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
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Foto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @if ($showMenu->count() === 0)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td colspan="6" class="py-4 text-center text-gray-500 dark:text-gray-400">
                                No Data Avaible!
                            </td>
                        </tr>
                    @else
                        @foreach ($showMenu as $menu)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $menu->nama_makanan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $menu->deskripsi }}
                                </td>
                                <td class="px-6 py-4">
                                    @foreach ($menu->kategori as $kategori)
                                        {{ $kategori->nama_kategori }}
                                        @if (!$loop->last)
                                            {{-- Tambahkan koma jika bukan elemen terakhir --}}
                                            ,
                                        @endif
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    {{ $menu->harga_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{-- <img src="{{ asset('img/logo.png') }}" alt="foto tenant" srcset="" height="80px"
                                        width="80px"> --}}
                                    <img src="{{ asset('storage/menu/' . $menu->foto_produk) }}" alt="foto produk"
                                        srcset="" height="80px" width="80px">
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('menu.edit-menu', [$menu->id, $menu->tenant_id]) }}"
                                        class="text-yellow-600 hover:text-yellow-900">Edit<span class="sr-only"></a>
                                    <form action="{{ route('menu.delete-menu', [$menu->id, $menu->tenant_id]) }}"
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ml-2 text-red-500 hover:text-red-700"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus Menu ini?')">Delete</button>
                                    </form>
                                    {{-- <a href="#" class="text-red-600 hover:text-red-900">Delete<span
                                            class="sr-only"></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
