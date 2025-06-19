@extends('layouts.main')
@section('title', 'Pembayaran')

@section('content')

    <div class="bg-white mt-5 p-6 rounded-lg shadow-md mx-auto max-w-screen-md">
        <h1 class="text-2xl font-bold mb-4">Halaman Pembayaran</h1>
        <p>Segala yang sudah dipesan tidak dapat diubah. Jika ada perubahan yang diperlukan, harap hubungi admin.</p>
        <div class="mt-3">
            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Contoh Bukti Pembayaran
            </button>
        </div>
    </div>

    <div class="bg-white mt-5 p-6 rounded-lg shadow-md mx-auto max-w-screen-md">
        <h1 class="text-2xl font-bold mb-4">Detail Pembayaran</h1>
        <form action="{{ route('keranjang.bayar', ['id' => Auth::id()]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="mb-4">Total Pembayaran: <span id="totalAmount"
                    class="font-bold">Rp.{{ number_format($keranjang->total_harga, 0, ',', '.') }}</span></p>

            {{-- Informasi pembayaran diganti dengan pesan untuk menghubungi admin --}}
            <div class="mb-4 p-4 bg-yellow-100 border border-yellow-400 rounded-lg">
                <p class="text-yellow-800">
                    <strong>Penting:</strong> Untuk informasi rekening pembayaran, silakan hubungi admin terlebih dahulu.
                </p>
            </div>

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="bukti">Upload Bukti
                Pembayaran</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="foto_bukti" name="foto_bukti" type="file" multiple>

            {{-- button --}}
            <div class="mt-5">
                <button type="submit"
                    class="text-center block bg-merahMM hover:bg-red-700 text-white px-4 py-2 rounded-lg duration-300 w-full">
                    Selesaikan Pembayaran
                </button>
                <div class="mt-2">
                    <a href="{{ url()->previous() }}"
                        class="text-center block w-full border border-merahMM rounded-md shadow-sm py-2 px-4 text-base font-medium text-merahMM hover:bg-red-50 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
                        Kembali
                    </a>
                </div>
                <div class="mt-4">
                    <p class="font-normal">Anda mengalami masalah? <span class="font-bold cursor-pointer">
                            <a href="https://wa.me/6282226401130?text=Halo%20Mingy,%20saya%20mengalami%20masalah%20dalam%20melakukan%20pembayaran"
                                class="text-blue-600" target="_blank">Hubungi Kami</a>
                        </span></p>
                </div>
            </div>
        </form>

    </div>

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Contoh Bukti Pembayaran
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Saat melakukan pembayaran, pastikan untuk mencantumkan nomor telepon dan nomor pesanan pada berita
                        acara dengan format yang benar.
                    </p>
                    <img class="max-w-lg" src="{{ asset('img/contohPembayaran2.jpg') }}" alt="contoh pembayaran"
                        srcset="">
                    <div class="mt-2"></div>
                    <img class="max-w-lg" src="{{ asset('img/contohPembayaran1.jpg') }}" alt="contoh pembayaran"
                        srcset="">
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="button"
                        class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tutup</button>
                </div>
            </div>
        </div>
    </div>

@endsection
