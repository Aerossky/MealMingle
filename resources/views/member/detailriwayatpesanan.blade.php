@extends('layouts.main')
@section('title', 'Riwayat Pesanan')

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <main class="px-4 pt-16 pb-24 sm:px-6 sm:pt-24 lg:px-8 lg:py-32">
        <div class="max-w-3xl mx-auto">
            <div class="max-w-xl">
                <h1 class="text-sm font-semibold uppercase tracking-wide text-green-500">Payment Successful!</h1>
                <p class="mt-4 text-4xl font-extrabold tracking-tight sm:text-5xl">Detail Riwayat Pesanan</p>
                <p class="mt-4 text-base text-gray-500">Pesanan Anda #123456 telah dikirim.</p>

                <dl class="mt-5 text-sm font-medium">
                    <dt class="text-gray-900">Order Number</dt>
                    <dd class="text-kuningMM mt-2">#123456</dd>
                </dl>
            </div>

            <section aria-labelledby="order-heading" class="mt-10 border-t border-gray-200">
                <h2 id="order-heading" class="sr-only">Pesanan Anda</h2>

                <div class="py-10 border-b border-gray-200 flex space-x-6">
                    <img src="{{ asset('img/logo.png') }}" alt=""
                        class="flex-none w-20 h-20 object-center object-cover bg-gray-200 rounded-lg md:w-40 md:h-40">
                    <div class="flex-auto flex flex-col">
                        <div>
                            <h4 class="font-medium text-gray-900">MealMingle</h4>
                            <p class="mt-2 text-sm text-gray-600">nyamnyamnyam enak nyamnyamnyam enak nyamnyamnyam enak</p>
                        </div>
                        <div class="mt-6 flex-1 flex items-end">
                            <dl class="flex text-sm divide-x divide-gray-200 space-x-4 sm:space-x-6">
                                <div class="flex">
                                    <dt class="font-medium text-gray-900">Jumlah</dt>
                                    <dd class="ml-2 text-gray-700">3</dd>
                                </div>
                                <div class="pl-4 flex sm:pl-6">
                                    <dt class="font-medium text-gray-900">Harga</dt>
                                    <dd class="ml-2 text-gray-700">Rp10.000,00</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="py-10 border-b border-gray-200 flex space-x-6">
                    <img src="{{ asset('img/logo.png') }}" alt=""
                        class="flex-none w-20 h-20 object-center object-cover bg-gray-200 rounded-lg md:w-40 md:h-40">
                    <div class="flex-auto flex flex-col">
                        <div>
                            <h4 class="font-medium text-gray-900">MealMingle</h4>
                            <p class="mt-2 text-sm text-gray-600">nyamnyamnyam enak nyamnyamnyam enak nyamnyamnyam enak</p>
                        </div>
                        <div class="mt-6 flex-1 flex items-end">
                            <dl class="flex text-sm divide-x divide-gray-200 space-x-4 sm:space-x-6">
                                <div class="flex">
                                    <dt class="font-medium text-gray-900">Jumlah</dt>
                                    <dd class="ml-2 text-gray-700">3</dd>
                                </div>
                                <div class="pl-4 flex sm:pl-6">
                                    <dt class="font-medium text-gray-900">Harga</dt>
                                    <dd class="ml-2 text-gray-700">Rp10.000,00</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="sm:ml-40 sm:pl-6">
                    <dl class="grid grid-cols-2 gap-x-6 text-sm py-10">
                        <div>
                            <dt class="font-medium text-gray-900">Alamat Pengiriman</dt>
                            <dd class="mt-2 text-gray-700">
                                <address class="not-italic">
                                    <span class="block">Jovan</span>
                                    <span class="block">Universitas Ciputra</span>
                                    <span class="block">CitraLand CBD Boulevard, Made, Kec. Sambikerep, Surabaya, Jawa
                                        Timur 60219</span>
                                </address>
                            </dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-900">Catering</dt>
                            <dd class="mt-2 text-gray-700">
                                <address class="not-italic">
                                    <span class="block">Papa Joe</span>
                                    <span class="block">Universitas Ciputra</span>
                                    <span class="block">CitraLand CBD Boulevard, Made, Kec. Sambikerep, Surabaya, Jawa
                                        Timur 60219</span>
                                </address>
                            </dd>
                        </div>
                    </dl>

                    <dl class="grid grid-cols-2 gap-x-6 border-t border-gray-200 text-sm py-10">
                        <div>
                            <dt class="font-medium text-gray-900">Jenis Pembayaran</dt>
                            <dd class="mt-2 text-gray-700">
                                <p>Gopay</p>
                                <p>08123456****</p>
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
                            <dd class="text-gray-700">Rp60.000,00</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="flex font-medium text-gray-900">Shipping</dt>
                            <dd class="text-gray-700">Rp10.000,00</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="font-medium text-gray-900">App Fee</dt>
                            <dd class="text-gray-700">Rp5.000,00</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="font-medium text-gray-900">Total</dt>
                            <dd class="text-gray-900 font-medium text-lg">Rp75.000,00</dd>
                        </div>
                    </dl>
                </div>
            </section>
        </div>
    </main>

@endsection
