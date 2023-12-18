@extends('layouts.main')
@section('title', 'Riwayat Pesanan')

@section('content')
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-8 px-4 md:px-6 lg:pb-12 lg:px-8">
            <div class="max-w-xl">
                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 md:text-3xl">Riwayat Pesanan</h1>
            </div>
            <div class="mt-4">
                <form class="w-full" method="GET" action="">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Search Recent Orders" required>
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-merahMM hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                    </div>
                </form>
            </div>
            <div class="mt-8">
                <div class="space-y-8">
                    @foreach ($riwayatPesanan as $data)
                        <div>
                            <div
                                class="bg-gray-50 rounded-lg py-6 px-4 md:px-6 md:flex md:items-center md:justify-between divide-gray-200">
                                <div class="flex justify-between pt-6 font-medium text-gray-900 md:block md:pt-0">
                                    <dt class="text-sm text-center">Waktu Pesanan</dt>
                                    <dd class="text-sm text-center text-gray-500">{{ $data->created_at }}</dd>
                                </div>
                                <div class="flex justify-between pt-6 font-medium text-gray-900 md:block md:pt-0">
                                    <dt class="text-sm text-center">Order Number</dt>
                                    <dd class="text-sm text-center text-gray-500">#{{ $data->order_id }}</dd>
                                </div>
                                <div class="flex justify-between pt-6 font-medium text-gray-900 md:block md:pt-0">
                                    <dt class="text-sm text-center">Total Harga</dt>
                                    <dd class="text-sm text-center text-gray-500">
                                        {{ 'Rp ' . number_format($data->total_harga, 0, ',', '.') }}
                                    </dd>
                                </div>

                                <div class="flex justify-between pt-6 md:pt-0 space-y-0 font-medium text-gray-900 md:block">
                                    <dt class="text-sm text-center">Status Transaksi</dt>
                                    @if ($data->transaction_status == 'menunggu_konfirmasi')
                                        <dd class="text-sm text-center text-yellow-600 font-semibold">Menunggu Konfirmasi
                                        </dd>
                                    @elseif ($data->transaction_status == 'konfirmasi')
                                        <dd class="text-sm text-center text-blue-600 font-semibold">Konfirmasi</dd>
                                    @elseif ($data->transaction_status == 'diproses')
                                        <dd class="text-sm text-center text-blue-600 font-semibold">Diproses</dd>
                                    @elseif ($data->transaction_status == 'dibatalkan')
                                        <dd class="text-sm text-center text-red-600 font-semibold">Dibatalkan</dd>
                                    @elseif ($data->transaction_status == 'selesai')
                                        <dd class="text-sm text-center text-green-600 font-semibold">Selesai</dd>
                                    @endif
                                </div>
                                <div class="flex justify-between pt-6 md:pt-0 space-y-0 font-medium text-gray-900 md:block">
                                    <dt class="text-sm text-center">Jenis Pembayaran</dt>
                                    <dd class="text-sm text-center text-gray-500">Transfer</dd>
                                </div>
                                <div class="flex justify-between pt-6 md:pt-0 space-y-0 font-medium text-gray-900 md:block">
                                    <dt class="text-sm text-center font-semibold">Detail Pesanan</dt>
                                    <dd class="text-sm text-center text-gray-500">
                                        <!-- Menggunakan elemen anchor <a> untuk membuat tautan -->
                                        <a href="{{ route('user-riwayat.show', $data->id) }}" class="underline">Lihat Detail
                                            Pesanan</a>
                                    </dd>
                                </div>
                            </div>


                            {{-- <div class="mt-3 overflow-x-auto">
                                <table class="w-full text-gray-500">
                                    <thead class="text-sm text-gray-500 text-center bg-gray-50">
                                        <tr>
                                            <th scope="col" class="md:w-1/4 lg:w-1/4 py-3 font-normal">Item</th>
                                            <th scope="col" class="md:w-1/4 lg:w-1/4 py-3 font-normal">Jumlah</th>
                                            <th scope="col" class="md:w-1/4 lg:w-1/4 py-3 font-normal">Waktu Pengiriman
                                            </th>
                                            <th scope="col" class="md:w-1/4 lg:w-1/4 py-3 font-normal">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-b border-gray-200 divide-y divide-gray-200 text-sm text-center">
                                        @foreach ($data->riwayat_pesanan_item as $data)
                                            <tr>
                                                <td class="py-6 font-medium text-gray-900">{{ $data->menu->nama_makanan }}
                                                </td>
                                                <td class="py-6 text-gray-900 font-medium">{{ $data->jumlah }}
                                                </td>
                                                <td class="py-6 text-gray-900 font-medium">{{ $data->waktu_pengiriman }}
                                                </td>
                                                <td class="py-6 text-gray-900 font-medium">
                                                    {{ 'Rp ' . number_format($data->menu->harga_produk, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div> --}}
                        </div>
                    @endforeach
                    {{-- <div>
                        <div class="bg-gray-50 rounded-lg py-6 px-4 md:px-6 md:flex md:items-center md:justify-between">
                            <div class="flex justify-between pt-6 font-medium text-gray-900 md:block md:pt-0">
                                <dt class="text-sm text-center">Waktu Pesanan</dt>
                                <dd class="text-sm text-center text-gray-500">1 Desember 2023</dd>
                            </div>
                            <div class="flex justify-between pt-6 font-medium text-gray-900 md:block md:pt-0">
                                <dt class="text-sm text-center">Order Number</dt>
                                <dd class="text-sm text-center text-gray-500">#123456</dd>
                            </div>
                            <div class="flex justify-between pt-6 font-medium text-gray-900 md:block md:pt-0">
                                <dt class="text-sm text-center">Total Harga</dt>
                                <dd class="text-sm text-center text-gray-500">Rp230.000,00</dd>
                            </div>

                            <div class="flex justify-between pt-6 md:pt-0 space-y-0 font-medium text-gray-900 md:block">
                                <dt class="text-sm text-center">Status Transaksi</dt>
                                <dd class="text-sm text-center text-green-500">Done</dd>
                            </div>
                            <div class="flex justify-between pt-6 md:pt-0 space-y-0 font-medium text-gray-900 md:block">
                                <dt class="text-sm text-center">Jenis Pembayaran</dt>
                                <dd class="text-sm text-center text-gray-500">Transfer</dd>
                            </div>
                            <div class="flex justify-between pt-6 md:pt-0 space-y-0 font-medium text-gray-900 md:block">
                                <dt class="text-sm text-center">Waktu Pengiriman</dt>
                                <dd class="text-sm text-center text-gray-500">1 Desember 2023</dd>
                            </div>
                        </div>
                        <div class="mt-3 overflow-x-auto">
                            <table class="w-full text-gray-500">
                                <thead class="text-sm text-gray-500 text-center bg-gray-50">
                                    <tr>
                                        <th scope="col" class="md:w-1/3 lg:w-1/3 py-3 font-normal">Item</th>
                                        <th scope="col" class="md:w-1/3 lg:w-1/3 py-3 font-normal">Jumlah</th>
                                        <th scope="col" class="md:w-1/3 lg:w-1/3 py-3 font-normal">Harga</th>
                                    </tr>
                                </thead>
                                <tbody class="border-b border-gray-200 divide-y divide-gray-200 text-sm text-center">
                                    <tr>
                                        <td class="py-6 font-medium text-gray-900">MealMingle</td>
                                        <td class="py-6 text-gray-900 font-medium">3</td>
                                        <td class="py-6 text-gray-900 font-medium">Rp10.000,00</td>
                                    </tr>
                                    <!--more item-->
                                    <tr>
                                        <td class="py-6 font-medium text-gray-900">MealMingle</td>
                                        <td class="py-6 text-gray-900 font-medium">3</td>
                                        <td class="py-6 text-gray-900 font-medium">Rp10.000,00</td>
                                    </tr>
                                    <tr>
                                        <td class="py-6 font-medium text-gray-900">MealMingle</td>
                                        <td class="py-6 text-gray-900 font-medium">3</td>
                                        <td class="py-6 text-gray-900 font-medium">Rp10.000,00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                    <!--more order-->

                </div>
            </div>
            <div class="mt-5">
                {{-- {{ $riwayat_pesanans->links('pagination::simple-tailwind') }} --}}
            </div>
        </div>

    @endsection
