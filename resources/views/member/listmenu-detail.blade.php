@extends('layouts.main')
@section('title', 'Menu-Detail')

@section('content')
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <section class="mx-auto my-auto px-5 dark:bg-gray-900 w-auto h-auto py-5 ">

        <div class="flex flex-col xl:flex-row max-w-lg md:max-w-full md:gap-4 md:p-2">

            <div class="xl:w-full xl:flex xl:flex-col">
                <div class="xl:flex">
                    <!-- Product Image -->
                    <div class="w-full">
                        <img src="{{ asset('storage/menu/' . $menu->foto_produk) }}" alt="Foto Produk"
                            class="w-full object-cover rounded cursor-pointer">
                    </div>

                    <!-- Product Details -->
                    <div class="ml-4">
                        <!-- Product Name -->
                        <h2 class="text-2xl font-bold text-gray-900 mt-4">{{ $menu->nama_makanan }}</h2>

                        <!-- Tenant Name -->
                        <h2 class="text-lg font-normal  text-gray-400 mb-4">{{ $menu->tenant->nama_tenant }}</h2>

                        <!-- Product Description -->
                        <div class="text-gray-700">
                            <p>{{ $menu->deskripsi }}</p>
                        </div>
                    </div>
                </div>


                {{-- list dummy produk --}}
                <div class="hidden xl:block mt-2">
                    <h1 class="font-medium text-xl">Makanan Serupa</h1>

                    <div class="flex flex-wrap mt-2">
                        {{-- Item Makanan 1 --}}

                        <div class="relative mr-4 group">
                            <a href="">
                                <img class="w-52 h-52 object-cover rounded"
                                    src="{{ asset('storage/menu/' . $menu->foto_produk) }}" alt="Foto Makanan">
                                <p class="mt-2">{{ $menu->nama_makanan }}</p>

                                {{-- Harga (tampil saat dihover) --}}
                                <div
                                    class="opacity-0 group-hover:opacity-60 bg-white absolute top-0 left-0 bottom-5 right-0 p-2 rounded-b z-10 duration-700 flex justify-center items-center">
                                    <p class="text-black text-center my-auto text-lg font-semibold">
                                        {{ number_format($menu->harga_produk, 0, ',', '.') }}</p>
                                </div>
                            </a>
                        </div>





                        <!-- Tambahkan item makanan lainnya di sini -->
                    </div>
                </div>



            </div>

            {{-- add to cart --}}
            <div
                class="flex flex-col w-full xl:w-1/3 justify-items-start my-auto md:mt-3 md:border md:rounded-xl md:p-4 md:col-span-4">
                <div class="invisible md:visible justify-start my-auto mb-4">
                    <label for="addToCart" class="font-bold">Atur Jumlah dan Catatan</label>
                </div>

                <form action="{{ route('keranjangitem.tambah', ['id' => $menu->id]) }}" method="POST">
                    @csrf
                    <!-- Quantity Section -->
                    <div class="flex items-center mb-4">
                        <label for="jumlah" class="mr-2 font-bold">Jumlah:</label>
                        <input type="number" id="jumlah" name="jumlah" min="1" value="1"
                            class="w-16 p-2 border border-gray-300 rounded">
                    </div>
                    {{-- pilihan hari --}}
                    <div class="mb-4">
                        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Pilih Hari:</h3>
                        <ul
                            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white flex-wrap">
                            @foreach ($menu->jadwal_pengiriman as $jadwal)
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-license" type="radio" value=""
                                            name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-license"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">{{ $jadwal->hari }},
                                            {{ $jadwal->waktu }}</label>
                                    </div>
                                </li>
                            @endforeach

                        </ul>

                    </div>

                    <!-- Notes Section -->
                    <div class="mb-4">
                        <label for="note_item" class="block text-gray-700 text-sm font-bold mb-2">Catatan:</label>
                        <textarea id="note_item" name="note_item" rows="4" placeholder="Ex. Sambal Dipisah"
                            class="w-full p-2 border border-gray-300 rounded"></textarea>
                    </div>

                    <!-- Subtotal Section -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Subtotal:</label>
                        <div class="flex items-center">
                            <span class="text-gray-800">Rp&nbsp</span>
                            <span class="text-xl font-bold">{{ number_format($menu->harga_produk, 0, ',', '.') }}</span>
                        </div>
                    </div>

                    <!-- Add to Cart Button -->

                    {{-- kalau belum login --}}
                    @if (Auth::check())
                        <button type="submit"
                            class="text-center w-full bg-merahMM hover:bg-red-700 text-white px-4 py-2 rounded-lg duration-300">
                            Add to Cart
                        </button>
                    @else
                        <div class="">
                            <a href="/signin"
                                class="text-center block bg-merahMM hover:bg-red-700 text-white px-4 py-2 rounded-lg duration-300 w-full">
                                Add to Cart
                            </a>

                        </div>
                    @endif

                </form>

                <div class="my-2"></div>
                <a href="{{ url()->previous() }}"
                    class="text-center bg-transparent border border-merahMM text-merahMM hover:bg-merahMM hover:text-white px-4 py-2 rounded-lg transition-colors duration-300">
                    Kembali
                </a>
            </div>

        </div>

    </section>
    @include('layouts.footer')
@endsection
