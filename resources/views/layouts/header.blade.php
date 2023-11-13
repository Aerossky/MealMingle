<nav class="bg-kuningMM fixed top-0 z-20 w-full  dark:bg-gray-900 start-0 dark:border-gray-600 ">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 md:px-7 mx-auto ">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo.png') }}" class="h-14 lg:h-16" alt="Flowbite Logo">
        </a>
        <div class="flex space-x-3 items-center md:order-2 md:space-x-0 rtl:space-x-reverse">
            {{-- cart --}}
            <div class="pr-6 md:mr-6 relative">
                <!-- Ikon belanja -->
                <a href="http://">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                    <!-- Notifikasi bulat -->
                    <span
                        class="absolute top-[-10px] right-3 mt-1 mr-1 h-5 w-5 bg-red-800 rounded-full flex items-center justify-center text-white text-xs">5+</span>
                </a>


            </div>


            {{-- (DEV)  --}}
            {{-- Belum Login --}}
            <button type="button"
                class="px-4 py-2 text-sm text-center text-white font-medium bg-merahMM rounded-lg hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <a href="{{ route('user.create') }}">Get started</a>
            </button>

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
                        class="block px-3 py-2 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tenant</a>
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
