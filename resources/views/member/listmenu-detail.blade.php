@extends('layouts.main')
@section('title', 'Menu-Detail')

@section('content')
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <section class="bg-white dark:bg-gray-900 py-8 antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">

                <!-- Product Image Section -->
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <div class="relative group">
                        <img src="{{ asset('storage/menu/' . $menu->foto_produk) }}" alt="{{ $menu->nama_makanan }}"
                            class="w-full h-96 object-cover rounded-lg shadow-lg transition-transform duration-300 group-hover:scale-105">

                        <!-- Badge for availability -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                <iconify-icon icon="mdi:check-circle" class="w-3 h-3 inline mr-1"></iconify-icon>
                                Tersedia
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Product Details Section -->
                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <!-- Tenant Badge -->
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-orange-100 text-orange-800 text-sm font-medium px-3 py-1 rounded-full flex items-center">
                            {{ $menu->tenant->nama_tenant }}
                        </div>
                    </div>

                    <!-- Product Name -->
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl dark:text-white mb-2">
                        {{ $menu->nama_makanan }}
                    </h1>

                    <!-- Price -->
                    <div class="mb-6">
                        <p class="text-3xl font-bold text-merahMM">
                            Rp {{ number_format($menu->harga_produk, 0, ',', '.') }}
                        </p>
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Deskripsi</h3>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-gray-700 leading-relaxed">{{ $menu->deskripsi }}</p>
                        </div>
                    </div>

                    <!-- Order Form -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                            <iconify-icon icon="mdi:cart-plus" class="w-5 h-5 mr-2 text-merahMM"></iconify-icon>
                            Atur Pesanan Anda
                        </h3>

                        <form action="{{ route('keranjangitem.tambah', ['id' => $menu->id]) }}" method="POST"
                            class="space-y-4">
                            @csrf

                            <!-- Quantity Section -->
                            <div>
                                <label for="jumlah" class="block text-sm font-medium text-gray-700 mb-2">
                                    <iconify-icon icon="mdi:counter" class="w-4 h-4 inline mr-1"></iconify-icon>
                                    Jumlah
                                </label>
                                <div class="flex items-center">
                                    <button type="button" id="decreaseBtn"
                                        class="p-2 bg-gray-100 hover:bg-gray-200 rounded-l-lg border border-gray-300">
                                        <iconify-icon icon="mdi:minus" class="w-4 h-4"></iconify-icon>
                                    </button>
                                    <input type="number" id="jumlah" name="jumlah" min="1" value="1"
                                        class="w-16 text-center border-t border-b border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-merahMM">
                                    <button type="button" id="increaseBtn"
                                        class="p-2 bg-gray-100 hover:bg-gray-200 rounded-r-lg border border-gray-300">
                                        <iconify-icon icon="mdi:plus" class="w-4 h-4"></iconify-icon>
                                    </button>
                                </div>
                            </div>

                            <!-- Delivery Schedule -->
                            <div>
                                <label for="hari" class="block text-sm font-medium text-gray-700 mb-2">
                                    <iconify-icon icon="mdi:clock-outline" class="w-4 h-4 inline mr-1"></iconify-icon>
                                    Jadwal Pengiriman
                                </label>
                                <select id="hari" name="hari" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-merahMM focus:border-transparent">
                                    <option value="" selected disabled>Pilih Hari dan Waktu</option>
                                    @if (isset($menu->jadwal_pengiriman) && $menu->jadwal_pengiriman->count() > 0)
                                        @foreach ($menu->jadwal_pengiriman as $jadwal)
                                            <option value="{{ $jadwal->hari }},{{ $jadwal->waktu }}">
                                                {{ $jadwal->hari }}, {{ $jadwal->waktu }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="" disabled>Tidak ada jadwal tersedia</option>
                                    @endif
                                </select>
                            </div>

                            <!-- Notes -->
                            <div>
                                <label for="note_item" class="block text-sm font-medium text-gray-700 mb-2">
                                    <iconify-icon icon="mdi:note-text-outline" class="w-4 h-4 inline mr-1"></iconify-icon>
                                    Catatan Khusus
                                </label>
                                <textarea id="note_item" name="note_item" rows="3" placeholder="Contoh: Sambal dipisah, tidak pedas, dll."
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-merahMM focus:border-transparent"></textarea>
                            </div>

                            <!-- Subtotal -->
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-medium text-gray-700">Subtotal:</span>
                                    <span id="subtotal" class="text-2xl font-bold text-merahMM">
                                        Rp {{ number_format($menu->harga_produk, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="space-y-3">
                                @if (Auth::check())
                                    <button type="submit"
                                        class="w-full bg-merahMM hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center">
                                        <iconify-icon icon="mdi:cart-plus" class="w-5 h-5 mr-2"></iconify-icon>
                                        Tambah ke Keranjang
                                    </button>
                                @else
                                    <a href="/signin"
                                        class="w-full bg-merahMM hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center">
                                        <iconify-icon icon="mdi:login" class="w-5 h-5 mr-2"></iconify-icon>
                                        Login untuk Memesan
                                    </a>
                                @endif

                                <a href="{{ url()->previous() }}"
                                    class="w-full bg-transparent border-2 border-merahMM text-merahMM hover:bg-merahMM hover:text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center">
                                    <iconify-icon icon="mdi:arrow-left" class="w-5 h-5 mr-2"></iconify-icon>
                                    Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for quantity controls and subtotal calculation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const decreaseBtn = document.getElementById('decreaseBtn');
            const increaseBtn = document.getElementById('increaseBtn');
            const quantityInput = document.getElementById('jumlah');
            const subtotalElement = document.getElementById('subtotal');
            const basePrice = {{ $menu->harga_produk }};

            function updateSubtotal() {
                const quantity = parseInt(quantityInput.value) || 1;
                const subtotal = basePrice * quantity;
                subtotalElement.textContent = 'Rp ' + subtotal.toLocaleString('id-ID');
            }

            decreaseBtn.addEventListener('click', function() {
                const currentValue = parseInt(quantityInput.value) || 1;
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                    updateSubtotal();
                }
            });

            increaseBtn.addEventListener('click', function() {
                const currentValue = parseInt(quantityInput.value) || 1;
                quantityInput.value = currentValue + 1;
                updateSubtotal();
            });

            quantityInput.addEventListener('input', function() {
                const value = parseInt(this.value) || 1;
                if (value < 1) this.value = 1;
                updateSubtotal();
            });
        });
    </script>

@endsection
