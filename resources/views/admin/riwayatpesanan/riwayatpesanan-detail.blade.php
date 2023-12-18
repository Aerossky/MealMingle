@extends('layouts.admin.main')
@section('title', 'Pesanan Detail Admin')

@section('content')
    {{-- list makanan yang di pesan apa saja --}}
    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Pesanan Detail</h1>
        <div class="">
            <a href="{{ route('riwayatpesanan.index') }}"
                class="focus:outline-none text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>
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
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Note
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tenant
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($riwayat_pesanan->isEmpty())
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center">Tidak ada pesanan yang tersedia.</td>
                        </tr>
                    @else
                        {{-- Loop Data --}}
                        @foreach ($riwayat_pesanan as $riwayat)
                            @foreach ($riwayat->riwayat_pesanan_item as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $item->menu->nama_makanan }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $item->jumlah }}
                                    </td>

                                    <td class="px-6 py-4">
                                        @if ($item->note_item == null)
                                            -
                                        @endif
                                        {{ $item->note_item }}
                                    </td>


                                    <td class="px-6 py-4">
                                        <a href="https://api.whatsapp.com/send?phone={{ $item->menu->tenant->user->phone_number }}"
                                            target="_blank">
                                            {{ $item->menu->tenant->nama_tenant }} </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>


@endsection
