@extends('layouts.main')
@section('title', 'Keranjang')

@section('content')
<div class="overflow-y-auto left-0 top-0 bg-gray-500 bg-opacity-50 w-full h-full justify-center items-center"
        id="dialog">
        <div
            class="bg-white border-2 border-kuningMM rounded-xl h-full sm:h-5/6 shadow-md p-4 sm:p-8 w-full flex flex-col overflow-y-auto mx-auto max-w-md sm:max-w-3xl">
            <div class="flex flex-col max-w-3xl p-6 space-y-4 h-fit sm:p-10 dark:bg-gray-900 dark:text-gray-100">
                <h2 class="text-xl font-semibold">Keranjang</h2>
                {{-- List Items --}}
                <ul class="flex flex-col divide-y dark:divide-gray-700">
                    <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                        <div class="flex w-full space-x-2 sm:space-x-4">
                            <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500"
                                src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80"
                                alt="Polaroid camera">
                            <div class="flex flex-col justify-between w-full pb-4">
                                <div class="flex justify-between w-full pb-2 space-x-2">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-semibold leadi sm:pr-8">Polaroid camera</h3>
                                        <p class="text-sm dark:text-gray-400">Classic</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-semibold">59.99€</p>
                                    </div>
                                </div>
                                <div class="flex text-sm divide-x">
                                    <div class="custom-number-input h-12 w-32">
                                        <label for="custom-input-number"
                                            class="w-full text-gray-700 text-sm font-semibold">Jumlah
                                        </label>
                                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                            <button data-action="decrement"
                                                class="bg-kuningMM text-merahMM hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-2xl font-thin">−</span>
                                            </button>
                                            <input type="number"
                                                class="outline-none border-none focus:outline-none text-center w-full bg-kuningMM font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-merahMM"
                                                name="custom-input-number" value="0" />
                                            <button data-action="increment"
                                                class="bg-kuningMM text-merahMM hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-2xl font-thin">+</span>
                                            </button>
                                        </div>
                                        <style>
                                            input[type='number']::-webkit-inner-spin-button,
                                            input[type='number']::-webkit-outer-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                            }

                                            .custom-number-input input:focus {
                                                outline: none !important;
                                            }

                                            .custom-number-input button:focus {
                                                outline: none !important;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                    </li>
                    <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                        <div class="flex w-full space-x-2 sm:space-x-4">
                            <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500"
                                src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80"
                                alt="Polaroid camera">
                            <div class="flex flex-col justify-between w-full pb-4">
                                <div class="flex justify-between w-full pb-2 space-x-2">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-semibold leadi sm:pr-8">Polaroid camera</h3>
                                        <p class="text-sm dark:text-gray-400">Classic</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-semibold">59.99€</p>
                                    </div>
                                </div>
                                <div class="flex text-sm divide-x">
                                    <div class="custom-number-input h-12 w-32">
                                        <label for="custom-input-number"
                                            class="w-full text-gray-700 text-sm font-semibold">Jumlah
                                        </label>
                                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                            <button data-action="decrement"
                                                class=" bg-kuningMM text-merahMM hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-2xl font-thin">−</span>
                                            </button>
                                            <input type="number"
                                                class="outline-none border-none focus:outline-none text-center w-full bg-kuningMM font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-merahMM"
                                                name="custom-input-number" value="0" />
                                            <button data-action="increment"
                                                class="bg-kuningMM text-merahMM hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-2xl font-thin">+</span>
                                            </button>
                                        </div>
                                        <style>
                                            input[type='number']::-webkit-inner-spin-button,
                                            input[type='number']::-webkit-outer-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                            }

                                            .custom-number-input input:focus {
                                                outline: none !important;
                                            }

                                            .custom-number-input button:focus {
                                                outline: none !important;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                        <div class="flex w-full space-x-2 sm:space-x-4">
                            <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500"
                                src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80"
                                alt="Polaroid camera">
                            <div class="flex flex-col justify-between w-full pb-4">
                                <div class="flex justify-between w-full pb-2 space-x-2">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-semibold leadi sm:pr-8">Polaroid camera</h3>
                                        <p class="text-sm dark:text-gray-400">Classic</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-semibold">59.99€</p>
                                    </div>
                                </div>
                                <div class="flex text-sm divide-x">
                                    <div class="custom-number-input h-12 w-32">
                                        <label for="custom-input-number"
                                            class="w-full text-gray-700 text-sm font-semibold">Jumlah
                                        </label>
                                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                            <button data-action="decrement"
                                                class=" bg-kuningMM text-merahMM hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-2xl font-thin">−</span>
                                            </button>
                                            <input type="number"
                                                class="outline-none border-none focus:outline-none text-center w-full bg-kuningMM font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-merahMM"
                                                name="custom-input-number" value="0" />
                                            <button data-action="increment"
                                                class="bg-kuningMM text-merahMM hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-2xl font-thin">+</span>
                                            </button>
                                        </div>
                                        <style>
                                            input[type='number']::-webkit-inner-spin-button,
                                            input[type='number']::-webkit-outer-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                            }

                                            .custom-number-input input:focus {
                                                outline: none !important;
                                            }

                                            .custom-number-input button:focus {
                                                outline: none !important;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                        <div class="flex w-full space-x-2 sm:space-x-4">
                            <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500"
                                src="https://images.unsplash.com/photo-1504274066651-8d31a536b11a?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=675&amp;q=80"
                                alt="Replica headphones">
                            <div class="flex flex-col justify-between w-full pb-4">
                                <div class="flex justify-between w-full pb-2 space-x-2">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-semibold leadi sm:pr-8">Replica</h3>
                                        <p class="text-sm dark:text-gray-400">White</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-semibold">99.95€</p>
                                    </div>
                                </div>
                                <div class="flex text-sm divide-x">
                                    <div class="custom-number-input h-12 w-32">
                                        <label for="custom-input-number"
                                            class="w-full text-gray-700 text-sm font-semibold">Jumlah
                                        </label>
                                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                            <button data-action="decrement"
                                                class=" bg-kuningMM text-merahMM hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-2xl font-thin">−</span>
                                            </button>
                                            <input type="number"
                                                class="outline-none border-none focus:outline-none text-center w-full bg-kuningMM font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-merahMM"
                                                name="custom-input-number" value="0" />
                                            <button data-action="increment"
                                                class="bg-kuningMM text-merahMM hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-2xl font-thin">+</span>
                                            </button>
                                        </div>
                                        <style>
                                            input[type='number']::-webkit-inner-spin-button,
                                            input[type='number']::-webkit-outer-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                            }

                                            .custom-number-input input:focus {
                                                outline: none !important;
                                            }

                                            .custom-number-input button:focus {
                                                outline: none !important;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <div class="space-y-1 text-left">
                    <p>Subtotal:
                        <span class="font-semibold">357 $</span>
                    </p>
                    <p class="dark:text-gray-400">Shipping Fee:
                        <span class="font-semibold">5 $</span>
                    </p>
                    <p class="dark:text-gray-400">App Fee:
                        <span class="font-semibold">5 $</span>
                    </p>
                </div>
                <div class="text-right">
                    <p class="dark:text-gray-400">Total:
                        <span class="font-semibold">1000 $</span>
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row sm:justify-end space-y-2 sm:space-y-0 sm:space-x-4">
                    <button type="button"
                        class="w-full sm:w-auto px-6 py-2 border border-1 border-black rounded-md dark:border-violet-400 hover:bg-kuningMM">Kembali</button>
                    <button type="button"
                        class="w-full sm:w-auto px-6 py-2 border border-1 border-black rounded-md dark:bg-violet-400 dark:text-gray-900 dark:border-violet-400 hover:bg-kuningMM">Pesan
                        Sekarang</button>
                </div>
            </div>
        </div>
    </div>
@endsection
