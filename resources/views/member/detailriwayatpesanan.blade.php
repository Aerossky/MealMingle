@extends('layouts.main')
@section('title', 'Riwayat Pesanan')

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <main class="px-4 pt-16 pb-24 sm:px-6 sm:pt-24 lg:px-8 lg:py-32">
        {{-- button kembali --}}
        <div class="max-w-3xl mx-auto mb-3">
            <div class="max-w-xl">
                <a href="{{ url()->previous() }}">
                    <button type="button"
                        class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-kuningMM hover:bg-kuningMM focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-kuningMM">
                        <!-- Heroicon name: solid/chevron-left -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.707 3.293a1 1 0 010 1.414L7.414 9H17a1 1 0 110 2H7.414l3.293 3.293a1 1 0 11-1.414 1.414l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Kembali
                    </button>
                </a>
            </div>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="max-w-xl">
                <h1 class="text-sm font-semibold uppercase tracking-wide text-green-500">
                    @if ($riwayatPesanan[0]->transaction_status == 'menunggu_konfirmasi')
                        <dd class="text-sm text-yellow-600 font-semibold">Menunggu Konfirmasi</dd>
                    @elseif ($riwayatPesanan[0]->transaction_status == 'konfirmasi')
                        <dd class="text-sm text-blue-600 font-semibold">Konfirmasi</dd>
                    @elseif ($riwayatPesanan[0]->transaction_status == 'diproses')
                        <dd class="text-sm text-blue-600 font-semibold">Diproses</dd>
                    @elseif ($riwayatPesanan[0]->transaction_status == 'dibatalkan')
                        <dd class="text-sm text-red-600 font-semibold">Dibatalkan</dd>
                    @elseif ($riwayatPesanan[0]->transaction_status == 'selesai')
                        <dd class="text-sm text-green-600 font-semibold">Selesai</dd>
                    @endif


                </h1>

                <p class="mt-4 text-4xl font-extrabold tracking-tight sm:text-5xl">Detail Riwayat Pesanan</p>

                <div class="flex items-center justify-between bg-gray-100 rounded-lg p-4 mt-4">
                    <div class="text-sm font-medium">
                        <p class="text-gray-600">Order Number</p>
                        <p class="text-lg font-bold text-yellow-600">#{{ $riwayatPesanan[0]->order_id }}</p>
                    </div>
                    <div class="ml-6">
                        <a href="https://api.whatsapp.com/send?phone=6282226401130&text=Halo%20Admin,%20saya%20ingin%20bertanya%20terkait%20pesanan%20saya%20dengan%20nomor%20order%20{{ $riwayatPesanan[0]->order_id }}"
                            class="text-blue-500 hover:underline" target="_blank">Hubungi Admin</a>
                    </div>

                </div>


            </div>
            <section aria-labelledby="order-heading" class="mt-10 border-t border-gray-200">
                <h2 id="order-heading" class="sr-only">Pesanan Anda</h2>

                @foreach ($riwayatPesanan as $data)
                    @foreach ($data->riwayat_pesanan_item as $item)
                        <div class="py-10 border-b border-gray-200 flex space-x-6">
                            <img src="{{ asset('storage/menu/' . $item->menu->foto_produk) }}" alt="foto produk"
                                class="flex-none w-20 h-20 object-center object-cover bg-gray-200 rounded-lg md:w-40 md:h-40">
                            <div class="flex-auto flex flex-col">
                                <div>
                                    <!-- Mengakses properti menu pada setiap riwayat_pesanan_item -->
                                    <h4 class="font-medium text-gray-900">{{ $item->menu->nama_makanan }}</h4>
                                    <p class="mt-2 text-sm text-gray-600">{{ $item->menu->deskripsi }}</p>
                                </div>

                                {{-- note --}}
                                <div class="flex-1 flex items-end justify-between text-sm">
                                    <div class="flex">
                                        <p class="text-gray-500">Catatan:</p>
                                        @if ($item->note_item == null)
                                            <p class="ml-2 text-gray-900">-</p>
                                        @endif
                                        <p class="ml-2 text-gray-900">{{ $item->note_item }}</p>
                                    </div>

                                    <p class="ml-4 text-gray-900">Rp.
                                        {{ number_format($item->menu->harga_produk, 0, ',', '.') }}</p>
                                </div>
                                <!-- ... -->
                            </div>
                        </div>
                    @endforeach
                @endforeach


                <div class="sm:ml-40 sm:pl-6">
                    <dl class="grid grid-cols-2 gap-x-6 text-sm py-10">
                        <div>
                            <dt class="font-medium text-gray-900">Alamat Pengiriman</dt>
                            <dd class="mt-2 text-gray-700">
                                <address class="not-italic">
                                    <span class="block">{{ $riwayatPesanan[0]->user->name }}</span>
                                    <span
                                        class="block">{{ $riwayatPesanan[0]->user->universitas->universitas_name }}</span>
                                    <span class="block">{{ $riwayatPesanan[0]->user->universitas->alamat }}</span>
                                </address>
                            </dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-900">Catering</dt>
                            <dd class="mt-2 text-gray-700">
                                <address class="not-italic">
                                    <div class="tenant-list">
                                        @foreach ($riwayatPesanan[0]->riwayat_pesanan_item as $key => $item)
                                            <span class="tenant-name">{{ $item->menu->tenant->nama_tenant }}</span>
                                            @if (!$loop->last)
                                                <span>,</span>
                                            @endif
                                        @endforeach
                                    </div>

                                </address>
                            </dd>
                        </div>
                    </dl>

                    <dl class="grid grid-cols-2 gap-x-6 border-t border-gray-200 text-sm py-10">
                        <div>
                            <dt class="font-medium text-gray-900">Jenis Pembayaran</dt>
                            <dd class="mt-2 text-gray-700">
                                <p>Transfer</p>
                            </dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-900">Profile</dt>
                            <dd class="mt-2 text-gray-700 flex items-center">
                                <span class="inline-block h-8 w-8 rounded-full overflow-hidden bg-gray-100">
                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <p class="ml-2">Personal</p>
                            </dd>
                        </div>
                    </dl>

                    <dl class="space-y-6 border-t border-gray-200 text-sm pt-10">
                        <div class="flex justify-between">
                            <dt class="font-medium text-gray-900">Subtotal</dt>
                            <dd class="text-gray-700">Rp. {{ number_format($riwayatPesanan[0]->total_harga, 0, ',', '.') }}
                            </dd>
                        </div>
                        {{-- <div class="flex justify-between">
                            <dt class="flex font-medium text-gray-900">Shipping</dt>
                            <dd class="text-gray-700">Rp10.000,00</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="font-medium text-gray-900">App Fee</dt>
                            <dd class="text-gray-700">Rp5.000,00</dd>
                        </div> --}}
                        <div class="flex justify-between">
                            <dt class="font-medium text-gray-900">Total</dt>
                            <dd class="text-gray-900 font-medium text-lg">Rp.
                                {{ number_format($riwayatPesanan[0]->total_harga, 0, ',', '.') }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </section>
        </div>
    </main>

@endsection
