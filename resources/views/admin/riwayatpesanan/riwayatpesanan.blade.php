@extends('layouts.admin.main')
@section('title', 'Riwayat Pesanan')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Pesanan</h1>
        {{-- <div class="">
            <a href=""
                class="focus:outline-none text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Data
                Terhapus</a>

            <a href="{{ route('riwayatpesanan.create') }}"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Tambah
                Pesanan</a>
        </div> --}}
    </div>

    {{-- Content --}}

    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto">
        {{-- search --}}
        <div class="flex justify-end mb-2">
            <div class="w-[400px]">
                <form action="{{ route('riwayatpesanan.search') }}" method="GET">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari Pesanan" name="search">
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>
        </div>
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
                                            case 'menunggu_konfirmasi':
                                                $spanClass = 'bg-yellow-300 text-yellow-900';
                                                $statusText = 'Menunggu Konfirmasi';
                                                break;
                                            case 'konfirmasi':
                                                $spanClass = 'bg-blue-300 text-blue-900';
                                                $statusText = 'Konfirmasi';
                                                break;
                                            case 'diproses':
                                                $spanClass = 'bg-blue-300 text-blue-900';
                                                $statusText = 'Diproses';
                                                break;
                                            case 'dibatalkan':
                                                $spanClass = 'bg-red-300 text-red-900';
                                                $statusText = 'Dibatalkan';
                                                break;
                                            case 'selesai':
                                                $spanClass = 'bg-green-300 text-green-900';
                                                $statusText = 'Selesai';
                                                break;
                                            default:
                                                $spanClass = 'bg-gray-300 text-gray-900';
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

                                    <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                        class="text-zinc-700 hover:text-zinc-700" type="button">
                                        Bukti
                                    </button>
                                    <a href="{{ route('riwayatpesanan.edit', $data->id) }}"
                                        class="text-yellow-600 hover:text-yellow-900">Edit<span class="sr-only"></a>

                                    <form action="{{ route('riwayatpesanan.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            {{-- Modal --}}
                            <!-- Main modal -->
                            <div id="default-modal" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Bukti Pembayaran
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="default-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <img class="w-full h-auto max-h-96 object-contain rounded"
                                                src="{{ asset('storage/bukti/' . $data->bukti_pembayaran) }}"
                                                alt="Foto Bukti Pembayaran">
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="default-modal" type="button"
                                                class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Kembali</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{-- Pagination --}}
            <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#"
                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Previous </a>
                    <a href="#"
                        class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Next </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">{{ $riwayat_pesanans->firstItem() }}</span>
                            to
                            <span class="font-medium">{{ $riwayat_pesanans->lastItem() }}</span>
                            of
                            <span class="font-medium">{{ $riwayat_pesanans->total() }}</span>
                            results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="{{ $riwayat_pesanans->previousPageUrl() }}"
                                class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <!-- Heroicon name: solid/chevron-left -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            @for ($i = 1; $i <= $riwayat_pesanans->lastPage(); $i++)
                                <a href="{{ $riwayat_pesanans->url($i) }}"
                                    class="{{ $riwayat_pesanans->currentPage() === $i ? 'bg-indigo-50 border-indigo-500 text-indigo-600' : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50' }} relative inline-flex items-center px-4 py-2 border text-sm font-medium">{{ $i }}</a>
                            @endfor
                            <a href="{{ $riwayat_pesanans->nextPageUrl() }}"
                                class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>


        </div>


    </div>


@endsection
