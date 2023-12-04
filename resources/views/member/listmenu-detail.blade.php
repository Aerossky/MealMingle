@extends('layouts.main')
@section('title', 'Menu-Detail')

@section('content')
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <section class="mx-auto my-auto px-5 dark:bg-gray-900 w-auto h-auto py-5">

        <div class="flex flex-col xl:flex-row max-w-lg md:max-w-full md:gap-4 md:p-2">

            <!-- Product Image -->
            <div class="flex w-full h-auto bg-gray-200 rounded-2xl md:mx-auto md:col-span-4">
                <img src="{{ asset('img/logo.png') }}" alt="Product Image"
                    class="mx-auto my-auto w-full h-96 object-cover rounded hover:scale-110 transition duration-500 cursor-pointer ">
            </div>

            <!-- Product Details -->
            <div class="flex flex-col max-w-2xl mx-auto my-auto py-2 md:mx-auto md:col-span-4">
                <!-- Product Name -->
                <h2 class="text-2xl font-extrabold text-gray-900 mt-4">Nama Produk</h2>

                <!-- Tenant Name -->
                <h2 class="text-lg font-normal italic text-gray-400 mb-4">By Nama Tenant</h2>

                <!-- Product Description -->
                <div class="text-gray-700 mx-auto my-auto">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo

                        consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt
                        ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo
                        consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt
                        ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo

                        consequat.
                    </p>
                </div>

            </div>

            {{-- add to cart --}}
            <div
                class="flex flex-col w-full xl:w-1/3 justify-items-start my-auto md:mt-3 md:border md:rounded-xl md:p-4 md:col-span-4">
                <div class="invisible md:visible justify-start my-auto mb-4">
                    <label for="addToCart" class="font-bold">Atur Jumlah dan Catatan</label>
                </div>

                <!-- Quantity Section -->
                <div class="flex items-center mb-4">
                    <label for="quantity" class="mr-2 font-bold">Jumlah:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1"
                        class="w-16 p-2 border border-gray-300 rounded">
                </div>

                <!-- Notes Section -->
                <div class="mb-4">
                    <label for="notes" class="block text-gray-700 text-sm font-bold mb-2">Catatan:</label>
                    <textarea id="notes" name="notes" rows="4" placeholder="Ex. Sambal Dipisah"
                        class="w-full p-2 border border-gray-300 rounded"></textarea>
                </div>

                <!-- Subtotal Section -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Subtotal:</label>
                    <div class="flex items-center">
                        <span class="text-gray-800">Rp.&nbsp</span>
                        <span class="text-xl font-bold">20000</span>
                        <span class="text-xl font-bold">,00</span>
                    </div>
                </div>

                <!-- Add to Cart Button -->
                <button class="bg-merahMM hover:bg-red-700 text-white px-4 py-2 rounded-lg duration-300">
                    Add to Cart
                </button>
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
