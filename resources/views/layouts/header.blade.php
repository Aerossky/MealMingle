<nav class="fixed top-0 z-20 w-full  dark:bg-gray-900 start-0 dark:border-gray-600">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo.png') }}" class="h-14 lg:h-16" alt="Flowbite Logo">
        </a>
        <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="px-4 py-2 text-sm text-center text-black font-bold bg-kuningMM rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                started</button>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-white bg-merahMM rounded md:bg-transparent md:text-merahMM font-extrabold  md:p-0 md:dark:text-slate-500"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-merahMM hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Menu</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-merahMM hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About
                        Us</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-merahMM hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-800 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
