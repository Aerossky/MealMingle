<nav class="bg-kuningMM fixed top-0 z-20 w-full  dark:bg-gray-900 start-0 dark:border-gray-600 ">
    <div class="fixed overflow-y-auto left-0 top-0 bg-gray-500 bg-opacity-50 w-full h-full justify-center items-center hidden"
        id="dialog">
        <div
            class="bg-white border border-2 border-kuningMM rounded-xl h-full sm:h-5/6 shadow-md p-4 sm:p-8 w-full flex flex-col overflow-y-auto mx-auto max-w-md sm:max-w-3xl">
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
                        class="w-full sm:w-auto px-6 py-2 border border-1 border-black rounded-md dark:border-violet-400 hover:bg-kuningMM"
                        onclick="hideCart()">Kembali</button>
                    <button type="button"
                        class="w-full sm:w-auto px-6 py-2 border border-1 border-black rounded-md dark:bg-violet-400 dark:text-gray-900 dark:border-violet-400 hover:bg-kuningMM">Pesan
                        Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Your scripts go here
    </script>

    {{-- OPEN CART --}}
    <script>
        function openCart() {
            let dialog = document.getElementById('dialog');
            let cartButton = document.getElementById('cartButton');
            cartButton.classList.add('hidden');
            cartButton.classList.remove('block');
            dialog.classList.remove('hidden');
            dialog.classList.add('flex');
            setTimeout(() => {
                dialog.classList.add('opacity-100');
            }, 20);
        }

        function hideCart() {
            let dialog = document.getElementById('dialog');
            let cartButton = document.getElementById('cartButton');
            cartButton.classList.remove('hidden');
            cartButton.classList.add('block');
            dialog.classList.add('opacity-0');
            setTimeout(() => {
                dialog.classList.add('hidden');
                dialog.classList.remove('flex');
            }, 20);
        }
    </script>
    {{-- Increment Button --}}
    <script>
        function decrement(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);

            if (value > 0) {
                value--;
                target.value = value;
            }

        }

        function increment(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value++;
            target.value = value;
        }

        const decrementButtons = document.querySelectorAll(
            `button[data-action="decrement"]`
        );

        const incrementButtons = document.querySelectorAll(
            `button[data-action="increment"]`
        );

        decrementButtons.forEach(btn => {
            btn.addEventListener("click", decrement);
        });

        incrementButtons.forEach(btn => {
            btn.addEventListener("click", increment);
        });
    </script>


    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 md:px-7 mx-auto ">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo.png') }}" class="h-14 lg:h-16" alt="Flowbite Logo">
        </a>
        <div class="flex space-x-3 items-center md:order-2 md:space-x-0 rtl:space-x-reverse">
            {{-- Cart Button --}}
            <div class="pr-6 md:mr-6 relative">
                <button class="block" onclick=openCart() id="cartButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                    <!-- Notifikasi -->
                    <span
                        class="absolute top-[-10px] right-3 mt-1 mr-1 h-5 w-5 bg-red-800 rounded-full flex items-center justify-center text-white text-xs">3+</span>
                </button>
            </div>


            {{-- (DEV)  --}}
            {{-- Belum Login --}}
            <button type="button"
                class="px-4 py-2 text-sm text-center text-white font-medium bg-merahMM rounded-lg hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                started</button>

            {{-- sudah login --}}
            {{-- <div class="hidden md:block">
                <p><span class="font-bold">Halo,</span> Pengguna</p>
            </div> --}}

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-black-500 rounded-lg md:hidden hover:bg-black-100 focus:outline-none focus:ring-2 focus:ring-black-200 dark:text-black-400 dark:hover:bg-black-700 dark:focus:ring-black-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 mt-4 font-medium border  rounded-lg md:p-0  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-black-800 md:dark:bg-black-900 dark:border-black-700">
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-white bg-merahMM rounded md:bg-transparent md:text-black font-extrabold  md:p-0 md:dark:text-slate-500"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Menu</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About
                        Us</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                </li>

                <div class="text-center md:hidden">
                    <p><span class="font-bold">Halo,</span> Pengguna</p>
                </div>
            </ul>
        </div>
    </div>
</nav>
