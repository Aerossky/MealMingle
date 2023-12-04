@extends('layouts.main')
@section('title', 'Keranjang')

@section('content')

    <div class="bg-white">
        <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Keranjang Mu</h1>
            <form action="{{ route('keranjang.checkout') }}" method="POST"
                class="mt-12 lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start xl:gap-x-16">
                @csrf

                {{-- input hidden --}}
                <input type="hidden" name="total_harga" value="{{ $keranjangs->total_harga }}">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">


                <section aria-labelledby="cart-heading" class="lg:col-span-7">
                    <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
                    @if ($keranjang_items->count() === 0)
                        <li class="flex flex-col py-6 sm:flex-row sm:justify-between">Keranjang masih kosong.</li>
                    @else
                        @foreach ($keranjang_items as $keranjang_item)
                            <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
                                <li class="flex py-6 sm:py-10">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('storage/menu/' . $keranjang_item->menu->foto_produk) }}"
                                            alt="Foto {{ $keranjang_item->menu->foto_produk }}"
                                            class="w-24 h-24 rounded-md object-center object-cover sm:w-48 sm:h-48">
                                    </div>

                                    <div class="ml-4 flex-1 flex flex-col justify-between sm:ml-6">
                                        <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                                            <div>
                                                <div class="flex justify-between">
                                                    <h3 class="text-sm">
                                                        <a href="#"
                                                            class="font-medium text-gray-700 hover:text-gray-800">
                                                            {{ $keranjang_item->menu->nama_makanan }} </a>
                                                    </h3>
                                                </div>
                                                <div class="mt-1 flex text-sm">
                                                    <p class="text-gray-500">
                                                        {{ $keranjang_item->menu->tenant->nama_tenant }}</p>
                                                    </p>
                                                </div>
                                                <p class="mt-1 text-sm font-medium text-gray-900">
                                                    Rp.{{ number_format($keranjang_item->menu->harga_produk, 0, ',', '.') }}
                                                </p>
                                            </div>

                                            <div class="mt-4 sm:mt-0 sm:pr-9">
                                                <select id="quantity-0" name="quantity-0"
                                                    class="max-w-full rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>

                                                <div class="absolute top-0 right-0">
                                                    <button type="button"
                                                        class="-m-2 p-2 inline-flex text-gray-400 hover:text-gray-500">
                                                        <span class="sr-only">Remove</span>
                                                        <!-- Heroicon name: solid/x -->
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="mt-4 flex text-sm text-gray-700 space-x-2">
                                            <!-- Heroicon name: solid/check -->
                                            <svg class="flex-shrink-0 h-5 w-5 text-green-500"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>In stock</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </section>

                <!-- Order summary -->
                <section aria-labelledby="summary-heading"
                    class="mt-16 bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
                    <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Rincian Pesanan</h2>

                    <dl class="mt-6 space-y-4">
                        <div class="flex items-center justify-between">
                            <dt class="text-sm text-gray-600">Subtotal</dt>
                            <dd class="text-sm font-medium text-gray-900">Rp
                                {{ number_format($keranjangs->total_harga, 0, ',', '.') }}</dd>
                        </div>
                        {{-- <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                            <dt class="flex items-center text-sm text-gray-600">
                                <span>Shipping estimate</span>
                                <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Learn more about how shipping is calculated</span>
                                    <!-- Heroicon name: solid/question-mark-circle -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </dt>
                            <dd class="text-sm font-medium text-gray-900">$5.00</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                            <dt class="flex text-sm text-gray-600">
                                <span>Tax estimate</span>
                                <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Learn more about how tax is calculated</span>
                                    <!-- Heroicon name: solid/question-mark-circle -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </dt>
                            <dd class="text-sm font-medium text-gray-900">$8.32</dd>
                        </div> --}}
                        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                            <dt class="text-base font-medium text-gray-900">Order total</dt>
                            <dd class="text-base font-medium text-gray-900">
                                {{ number_format($keranjangs->total_harga, 0, ',', '.') }}</dd>
                        </div>
                    </dl>

                    <div class="mt-6">
                        <div class="">
                            <button type="submit"
                                class="w-full bg-merahMM border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
                                Checkout
                            </button>
                        </div>
                        <div class="mt-8">
                            <a href="menus/showmenu"
                                class="text-center block w-full border border-merahMM rounded-md shadow-sm py-3 px-4 text-base font-medium text-merahMM hover:bg-red-50 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
                                Kembali
                            </a>
                        </div>

                    </div>
                </section>
            </form>
        </div>
    </div>
@endsection
