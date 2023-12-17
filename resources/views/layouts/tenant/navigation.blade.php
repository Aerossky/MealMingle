<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
    aria-controls="sidebar-multi-level-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="sidebar-multi-level-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-kuningMM"
    aria-label="Sidebar">

    <!-- Menampilkan nama pengguna di bagian paling bawah -->
    <div class="mt-auto px-4 pt-4 bg-kuningMM dark:bg-gray-800 text-start">
        <p class="text-base text-dark dark:text-gray-400">
            Halo, <span class="font-bold">Tenant</span>!
        </p>
    </div>
    <div class="h-full px-3 py-4 overflow-y-auto bg-kuningMM dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li class="font-bold">
                <a href="/tenanttes"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-black transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>

            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="btn-item" data-collapse-toggle="btn-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2">
                            <path stroke-linecap="round"
                                d="M11.029 2.54a2 2 0 0 1 1.942 0l7.515 4.174a1 1 0 0 1 .514.874v8.235a2 2 0 0 1-1.029 1.749l-7 3.888a2 2 0 0 1-1.942 0l-7-3.889A2 2 0 0 1 3 15.824V7.588a1 1 0 0 1 .514-.874z" />
                            <path stroke-linecap="round" d="m7.5 4.5l9 5V13M6 12.328L9 14" />
                            <path d="m3 7l9 5m0 0l9-5m-9 5v9.5" />
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap"><a href="/tenantpengiriman">Pengiriman</a></span>
                </button>
            </li>

            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-menu" data-collapse-toggle="dropdown-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M18.06 23h1.66c.84 0 1.53-.65 1.63-1.47L23 5.05h-5V1h-1.97v4.05h-4.97l.3 2.34c1.71.47 3.31 1.32 4.27 2.26c1.44 1.42 2.43 2.89 2.43 5.29zM1 22v-1h15.03v1c0 .54-.45 1-1.03 1H2c-.55 0-1-.46-1-1m15.03-7C16.03 7 1 7 1 15zM1 17h15v2H1z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Menu</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-menu" class="hidden py-2 space-y-2 ml-5">
                    {{-- menu --}}
                    <li>
                        <a href="/menusaya"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M18 3a1 1 0 0 1 .993.883L19 4v16a1 1 0 0 1-1.993.117L17 20v-5h-1a1 1 0 0 1-.993-.883L15 14V8c0-2.21 1.5-5 3-5m-6 0a1 1 0 0 1 .993.883L13 4v5a4.002 4.002 0 0 1-3 3.874V20a1 1 0 0 1-1.993.117L8 20v-7.126a4.002 4.002 0 0 1-2.995-3.668L5 9V4a1 1 0 0 1 1.993-.117L7 4v5a2 2 0 0 0 1 1.732V4a1 1 0 0 1 1.993-.117L10 4l.001 6.732a2 2 0 0 0 .992-1.563L11 9V4a1 1 0 0 1 1-1" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Menu Saya</span>
                        </a>
                    </li>
                    {{-- add menu --}}
                    <li>
                        <a href="/tambahmenu"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m18 15l-.001 3H21v2h-3.001L18 23h-2l-.001-3H13v-2h2.999L16 15zm-7 3v2H3v-2zm10-7v2H3v-2zm0-7v2H3V4z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Tambah Menu</span>
                        </a>
                    </li>
                    {{-- edit menu --}}
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-fin" data-collapse-toggle="dropdown-fin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M11.75 16h.725v-.8q.7-.1 1.188-.575t.487-1.225q0-.65-.5-1.088T12.5 11.6V9.75q.25.075.413.25t.237.425l.9-.375q-.175-.525-.6-.837T12.5 8.8V8h-.75v.775q-.7.075-1.187.513t-.488 1.162q0 .675.513 1.125t1.162.725v1.975q-.4-.125-.675-.425t-.375-.7l-.875.375q.2.7.7 1.15t1.225.55zm.75-1.75V12.6q.275.125.488.3t.212.525q0 .4-.2.563t-.5.262m-.75-2.975q-.275-.125-.5-.3t-.225-.525q0-.35.225-.513t.5-.212zM8 19q-2.925 0-4.962-2.037T1 12q0-2.925 2.038-4.962T8 5h8q2.925 0 4.963 2.038T23 12q0 2.925-2.037 4.963T16 19zm0-2h8q2.075 0 3.538-1.463T21 12q0-2.075-1.463-3.537T16 7H8Q5.925 7 4.463 8.463T3 12q0 2.075 1.463 3.538T8 17m4-5" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Keuangan</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-fin" class="hidden py-2 space-y-2 ml-5">
                    {{-- Saldo --}}
                    <li>
                        <a href="/saldo"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M95.5 104h320a87.73 87.73 0 0 1 11.18.71a66 66 0 0 0-77.51-55.56L86 94.08h-.3a66 66 0 0 0-41.07 26.13A87.57 87.57 0 0 1 95.5 104m320 24h-320a64.07 64.07 0 0 0-64 64v192a64.07 64.07 0 0 0 64 64h320a64.07 64.07 0 0 0 64-64V192a64.07 64.07 0 0 0-64-64M368 320a32 32 0 1 1 32-32a32 32 0 0 1-32 32" />
                                <path fill="currentColor"
                                    d="M32 259.5V160c0-21.67 12-58 53.65-65.87C121 87.5 156 87.5 156 87.5s23 16 4 16s-18.5 24.5 0 24.5s0 23.5 0 23.5L85.5 236Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Saldo Saya</span>
                        </a>
                    </li>
                    {{-- Rekening --}}
                    <li>
                        <a href="/rekening"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.8 21.2l-2.8-3l1.2-1.2l1.6 1.6l3.6-3.6l1.2 1.4zM13 10h-3v7h2.1c.1-.8.5-1.6.9-2.3zm3 0v2.3c.6-.2 1.3-.3 2-.3c.3 0 .7 0 1 .1V10zm-3.9 9H2v3h11.5c-.7-.8-1.2-1.9-1.4-3M21 6l-9.5-5L2 6v2h19zM7 17v-7H4v7z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Rekening Bank</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/profiltenant"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                        <path fill="currentColor"
                            d="M14 1H1V0h13zM1.01 2.402A.5.5 0 0 1 1.5 2h12a.5.5 0 0 1 .49.402l1 5A.5.5 0 0 1 14.5 8H.5a.5.5 0 0 1-.49-.598zM1 9v5H0v1h15v-1h-1V9h-2v2H3V9z" />
                        <path fill="currentColor" d="M4 9h7v1H4z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profil Tenant</span>
                </a>
            </li>


            <li>
                <a href="/"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 576 512">
                        <path
                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c.2 35.5-28.5 64.3-64 64.3H128.1c-35.3 0-64-28.7-64-64V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24zM352 224a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zm-96 96c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H256z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Main Website</span>
                </a>
            </li>


            <li class="">
                <form action="/logout" method="post">
                    {{-- token csrf untuk logout --}}
                    @csrf
                    <button type="submit"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        style="border: none; background: none;">
                        <svg class="flex-shrink-0 w-5 h-5 text-black transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path
                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
                                fill="#4b5563" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </button>
                </form>
            </li>

            <li class="logo-container">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </li>

        </ul>
    </div>


</aside>

<!--maaf riski tailwind aku nda bs ngeset pakai css manual sj y ;)-->
<style>
    .logo-container {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        text-align: center;
        padding: 10px;
    }
    .logo {
        width: 80px;
        height: auto;
    }
</style>
