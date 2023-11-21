@extends('layouts.main')
@section('title', 'Tenant Detail')

@section('content')
    {{-- ukuran Kiri kanan --}}
    <div class="px-4 py-5 md:mx-28 md:mt-7 bg-[#202020] md:rounded-md text-white font-Montserrat">
        {{-- Detail Tenant --}}
        <div class="grid grid-cols-2">
            <div class="flex justify-center items-center flex-shrink-0 ">
                <img class="rounded-full md:rounded-none object-cover image-container"
                    src="{{ asset('img/tenant/apple.jpg') }}" alt="image description">
            </div>

            {{-- kanan --}}
            <div class="flex justify-center flex-col">
                <h1 class="font-medium text-xl">Nama Tenant</h1>
                {{-- Deskripsi Dekstop --}}
                <p class="font-light hidden md:block">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, rem.
                </p>
                <p class="font-normal">⭐5</p>
            </div>
        </div>
        {{-- Deskripsi Mobile --}}
        <div class="mt-4 overflow-hidden max-h-40 md:hidden">
            <p class="font-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, rem.
            </p>
        </div>
    </div>

    <div class="bg-white font-Montserrat px-4 md:px-14">
        <div class="max-w-2xl mx-auto px-4 sm:py-6 sm:px-6 lg:max-w-7xl lg:px-8">
            {{-- Button Kembali Dekstop --}}
            <a href="#" class="hidden text-sm font-medium text-merahMM hover:text-red-700 md:inline">Kembali<span
                    aria-hidden="true"> &rarr;</span></a>

            {{-- List Produk --}}
            <div class="mt-6 grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <div class="group relative">
                    <div
                        class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Nama Makanan
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Rp 18000</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">⭐5</p>

                    </div>
                </div>

                <!-- More products... -->

                <div class="group relative">
                    <div
                        class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Nama Makanan
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Rp 18000</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">⭐5</p>

                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Nama Makanan
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Rp 18000</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">⭐5</p>
                    </div>
                </div>
            </div>

            {{-- Button Kembali Mobile --}}
            <div class="mt-8 text-sm md:hidden">
                <a href="#" class="md:hidden text-sm font-medium text-merahMM hover:text-red-700 pb-5">Kembali<span
                        aria-hidden="true"> &rarr;</span></a>

            </div>
        </div>
    </div>

@endsection
