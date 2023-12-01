@extends('layouts.main')
@section('title', 'Menu')

@section('content')
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <div>

        <section class="bg-merahMM dark:bg-gray-900 ">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <br>
                <br>
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Our
                    Menu</h1>
                <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48">Nikmati Berbagai Makanan Dengan
                    Cita Rasa Yang Berbeda-Beda</p>
                <br>
            </div>
        </section>

        {{-- jarak kiri kanan --}}
        <div class="px-4 mb-20 md:px-48">
            <div class="mt-3">
                <div class="flex gap-2">
                    <div class="flex col-span-11 w-full">
                        <form class="w-full" method="GET" action="{{ route('menu.show-Filtered') }}">
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white ">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" name="search"
                                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                                    placeholder="Cari Makanan..." required>
                                <button type="submit"
                                    class="text-white absolute end-2.5 bottom-2.5 bg-merahMM hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="flex col-span-1 justify-center items-center">
                        <div class="">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                class="text-white bg-merahMM hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center "
                                type="button">Filter
                                <span class="iconify" data-icon="gridicons:dropdown" data-inline="false"
                                    style="width: 24px; height:24px;"></span>
                            </button>
                        </div>

                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 dark:bg-gray-700">
                            <ul class="text-sm text-black dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <form action="{{ route('menu.show-Filtered') }}" method="GET" class="">
                                    @foreach ($allfilter as $item)
                                        <li>
                                            <button type="submit" name="filter" value="{{ $item->id }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full">{{ $item->nama_kategori }}</a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <button type="submit" name="filter" value="all"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full">All</a>
                                    </li>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Makanan Card --}}
            <div class="bg-white font-Montserrat md:px-14">
                <div class="sm:px-6 lg:max-w-7xl lg:px-8">
                    @if (count($allmenu) > 0)
                    <div class="md:flex md:items-center md:justify-between mt-5">
                        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Makanan</h2>
                    </div>
                    @endif
                    

                    <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-1 lg:gap-x-8">
                        {{-- Loop Tenant --}}
                        @foreach ($allmenu as $item)
                            {{-- @for ($i = 1; $i <= 8; $i++) --}}
                            <div class="group relative">
                                <div
                                    class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                                    <img src="{{ asset('img/page/signin/logineg.jpeg') }}"
                                        alt="Hand stitched, orange leather long wallet."
                                        class="w-full h-full object-center object-cover">
                                </div>
                                <h2 class="mt-4 text-lg text-black font-semibold">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        {{ $item->nama_makanan }}
                                        {{-- Nasi Goreng Babi --}}
                                    </a>
                                </h2>
                                <h2 class="mt-1 text-sm opacity-50 text-gray-700">
                                    <a href="#">
                                        {{ $item->deskripsi }}
                                        {{-- Papa Joe --}}
                                    </a>
                                </h2>
                                <h2 class="mt-1 text-md opacity-50 text-gray-700">
                                    <a href="#">
                                        Rp. {{ $item->harga_produk }},00
                                        {{-- Rp. 20000 --}}
                                    </a>
                                </h2>
                            </div>
                            {{-- @endfor --}}
                        @endforeach
                    </div>
                    @if (count($allmenu) == 0)
                        <div class="flex text-center justify-center">
                            <h1 class="text-xl">Maaf Makanan Tidak Ditemukan</h1>
                        </div>
                    @endif

                </div>
            </div>
        </div>


    </div>
    @include('layouts.footer')
@endsection
