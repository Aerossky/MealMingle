@extends('layouts.admin.main')
@section('title', 'Home Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Menu Deleted Data</h1>
        <div class="">
            <div class="">
                <a href="{{ route('tenant.show', $tenantId) }}"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>
            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto text-center">
        <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50 ">
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
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @if ($menuTrashed->count() === 0)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td colspan="6" class="py-4 text-center text-gray-500 dark:text-gray-400">
                            No Data Avaible!
                        </td>
                    </tr>
                @else
                    @foreach ($menuTrashed as $menu)
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
                                {{ $menu->harga_produk }}
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/menu/' . $menu->foto_produk) }}" alt="foto tenant"
                                    srcset="" height="80px" width="80px">
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('menu.restore', [$tenantId, $menu->id]) }}"
                                    class="text-yellow-600 hover:text-yellow-900">Restore<span class="sr-only"></a>

                                <a href="{{ route('menu.forceDelete', [$tenantId, $menu->id]) }}"
                                    class="text-red-600 hover:text-red-900">Delete<span class="sr-only"></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
