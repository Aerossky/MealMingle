<nav class="bg-kuningMM fixed top-0 z-20 w-full  dark:bg-gray-900 start-0 dark:border-gray-600 ">

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

    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 md:px-7 mx-auto ">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo.png') }}" class="h-14 lg:h-16" alt="MealMingle Logo">
        </a>
        <div class="flex space-x-3 items-center md:order-2 md:space-x-0 rtl:space-x-reverse">
            {{-- (DEV)  --}}
            @if (Auth::check())
                {{-- Cart Button --}}
                <div class="pr-6 md:mr-6 relative">
                    <a href="{{ route('keranjang.indexuser') }}">
                        <button class="block" id="cartButton">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-shopping-bag">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                            <!-- Notifikasi -->
                            <span
                                class="absolute top-[-10px] right-3 mt-1 mr-1 h-5 w-5 bg-red-800 rounded-full flex items-center justify-center text-white text-xs">{{ Session::get('itemCount', 0) }}</span>
                        </button>
                    </a>
                </div>
                {{-- sudah login --}}
                <div id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                    class="hidden md:block cursor-pointer">
                    <p><span class="font-bold">Halo, {{ Auth::user()->name }}</span></p>
                </div>
                <!-- Dropdown menu -->
                <div id="dropdownDivider"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                        @if (Auth::check())
                            @if (Auth::user()->role_id == 1)
                                <li>
                                    <a href="/admin-dashboard"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admin
                                        Dashboard</a>
                                </li>
                            @endif
                        @endif
                        <li>
                            <a href="{{ route('setting.index') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('user-riwayat.index') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">History
                            </a>
                        </li>

                    </ul>
                    <div class="py-2">
                        <a href="/logout"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Logout
                        </a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                {{-- Belum Login --}}
                <button type="button"
                    class="px-4 py-2 text-sm text-center text-white font-medium bg-merahMM rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-500 duration-500">
                    <a href="/signin">Get started</a>
                </button>
            @endif

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
                class="flex bg-white md:bg-transparent flex-col p-4 mt-4 font-medium border  rounded-lg md:p-0  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-black-800 md:dark:bg-black-900 dark:border-black-700">
                <li>
                    <a href="/"
                        class="block px-3 py-2 text-white bg-merahMM rounded md:bg-transparent md:text-black font-extrabold  md:p-0 md:dark:text-slate-500"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('menu.show-Normal') }}"
                        class="block px-3 py-2 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Menu</a>
                </li>
                <li>
                    <a href="/#about"
                        class="block px-3 py-2 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About
                        Us</a>
                </li>
                <li>
                    <a href="/#faq"
                        class="block px-3 py-2 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                </li>

                <li class="md:hidden">
                    <a href="{{ route('setting.index') }}"
                        class="block px-3 py-2 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Setting</a>
                </li>

                @if (Auth::check())
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit"
                                class="block md:hidden text-left px-3 py-2 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                style="width: 100%; height: 100%;">
                                Logout
                            </button>
                        </form>
                    </li>
                    <div class="text-center md:hidden">
                        <p><span class="font-bold">Halo,</span> {{ Auth::user()->name }}</p>
                    </div>
                @endif

            </ul>
        </div>
    </div>
</nav>
