@extends('layouts.admin.main')
@section('title', 'Pesanan')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Pesanan</h1>
        <div class="">
            <a href=""
                class="focus:outline-none text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Data
                Terhapus</a>

            <a href="{{ route('riwayatpesanan.create') }}"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
                Pesanan</a>
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
                            Order ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama User
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Transaksi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @if ($riwayat_pesanans->isEmpty())
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center">Tidak ada pesanan yang tersedia.</td>
                        </tr>
                    @else
                        {{-- Loop Data --}}
                        @foreach ($riwayat_pesanans as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $data->order_id }}
                                </td>

                                <td class="px-6 py-4">
                                    <a href="https://api.whatsapp.com/send?phone={{ $data->user->phone_number }}"
                                        target="_blank" class="text-green-700 font-bold">{{ $data->user->name }}</a>
                                </td>

                                <td class="px-6 py-4">
                                    @php
                                        $status = $data->transaction_status;
                                        $spanClass = '';
                                        $statusText = '';

                                        switch ($status) {
                                            case 'menunggu_pembayaran':
                                                $spanClass = 'bg-yellow-100 text-yellow-800';
                                                $statusText = 'menunggu_pembayaran';
                                                break;
                                            case 'konfirmasi':
                                                $spanClass = 'bg-blue-100 text-blue-800';
                                                $statusText = 'konfirmasi';
                                                break;
                                            case 'dibatalkan':
                                                $spanClass = 'bg-red-100 text-red-800';
                                                $statusText = 'dibatalkan';
                                                break;
                                            case 'selesai':
                                                $spanClass = 'bg-green-100 text-green-800';
                                                $statusText = 'selesai';
                                                break;
                                            default:
                                                $spanClass = 'bg-gray-100 text-gray-800';
                                                $statusText = 'Status Tidak Diketahui';
                                        }
                                    @endphp

                                    <span
                                        class="font-medium me-2 px-2.5 py-0.5 rounded {{ $spanClass }} dark:bg-green-900 dark:text-green-300">
                                        {{ $statusText }}
                                    </span>
                                </td>


                                <td class="px-6 py-4">
                                    {{-- indonesia rupiah format --}}
                                    {{ 'Rp ' . number_format($data->total_harga, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 flex gap-2">
                                    <a href="{{ route('riwayatpesanan.show', $data->id) }}"
                                        class="text-yellow-600 hover:text-yellow-900">Detail<span class="sr-only"></a>

                                    <a href="{{ route('riwayatpesanan.edit', $data->id) }}"
                                        class="text-yellow-600 hover:text-yellow-900">Edit<span class="sr-only"></a>
                                    <form action="{{ route('riwayatpesanan.destroy', $data->id) }}" method="POST">
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
