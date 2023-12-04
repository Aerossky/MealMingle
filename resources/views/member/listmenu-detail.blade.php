@extends('layouts.main')
@section('title', 'Menu-Detail')

@section('content')
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <section class="mx-auto my-auto px-5 dark:bg-gray-900 w-auto h-auto py-5 ">

        <div class="flex flex-col xl:flex-row max-w-lg md:max-w-full md:gap-4 md:p-2">

            <!-- Product Image -->
            <div class="flex  h-auto bg-gray-200 rounded-2xl md:col-span-4  xl:w-1/3">
                <img src="{{ asset('storage/menu/' . $menu->foto_produk) }}" alt="Foto Produk"
                    class="mx-auto my-auto w-full h-96 object-cover rounded hover:scale-110 transition duration-500 cursor-pointer ">
            </div>

            <!-- Product Details -->
            <div class="flex flex-col max-w-2xl py-2 md:col-span-4 xl:w-1/3">
                <!-- Product Name -->
                <h2 class="text-2xl font-extrabold text-gray-900 mt-4">{{ $menu->nama_makanan }}</h2>

                <!-- Tenant Name -->
                <h2 class="text-lg font-normal italic text-gray-400 mb-4">{{ $menu->tenant->nama_tenant }}</h2>

                <!-- Product Description -->
                <div class="text-gray-700 ">
                    <p>
                        {{ $menu->deskripsi }}
                    </p>
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
                    <button type="submit"
                        class="text-center w-full bg-merahMM hover:bg-red-700 text-white px-4 py-2 rounded-lg duration-300">
                        Add to Cart
                    </button>
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
