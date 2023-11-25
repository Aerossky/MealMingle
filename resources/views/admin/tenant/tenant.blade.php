@extends('layouts.admin.main')
@section('title', 'Tenant Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Tenant</h1>
        <div class="">
            <a href="{{ route('tenant.create') }}"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
                Tenant</a>
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
                            Nama Tenant
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Universitas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pemilik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Foto
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @if ($tenants->count() === 0)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td colspan="7" class="py-4 text-center text-gray-500 dark:text-gray-400">
                                No Data Avaible!
                            </td>
                        </tr>
                    @else
                        @foreach ($tenants as $tenant)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">{{ $tenant->nama_tenant }}</td>
                                <td class="px-6 py-4">{{ $tenant->user->name }}</td>
                                <td class="px-6 py-4">
                                @foreach ($tenant->universitas as $uni)
                                    {{ $uni->universitas }}
                                @endforeach
                                </td>
                                <td class="px-6 py-4">{{ $tenant->deskripsi }}</td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('img/tenant/' . $tenant->foto_tenant) }}" alt="foto tenant" srcset="" height="80px"
                                        width="80px">
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('tenant.show', $tenant->id) }}"
                                        class="text-yellow-600 hover:text-yellow-900">Detail<span
                                        class="sr-only"></a>
                                    <a href="{{ route('tenant.edit', $tenant->id) }}"
                                        class="text-yellow-600 hover:text-yellow-900">Edit<span class="sr-only"></a>
                                    <form action="{{ route('tenant.destroy', $tenant->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus Tenant ini?')">Delete<span class="sr-only"></button>
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
