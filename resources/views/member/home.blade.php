<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | MealMingle</title>
    {{-- tailwind --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tenant.css') }}">

    {{-- scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/js/splide.min.js"></script>

    <!-- typed js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>

<body class="flex flex-col min-h-screen font-sahabatLariku ">
    {{-- header --}}
    @include('layouts.header')

    <div class="relative">
        @if (session('success'))
            <div id="toast-success"
                class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed top-[100px] md:top-auto md:bottom-10 right-10 z-50"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif

        {{-- hero section --}}
        <section class="flex flex-col justify-center mt-20 md:mt-[85px] bg-kuningMM pb-[250px] md:pb-20" id="hero">
            {{-- ukuran Kiri kanan --}}
            <div class="">
                {{-- pembungkus --}}
                <div class="flex items-center justify-around flex-col md:p-10 md:flex-row">
                    {{-- Left Section --}}
                    <div class="order-2 md:order-1 hero__text w-">
                        <h1 class="font-bold text-center text-2xl md:text-left xl:text-5xl w-full">Teman Makan <span
                                id="teks"></span><br>
                            Selama Perjalanan <span class="text-merahMM">Kuliah</span>.
                        </h1>
                        {{-- mobile --}}
                        <div class="tagline">
                            <p class="mt-4 md:mt-[50px] text-center md:hidden">
                                Temukan makanan lezat dengan mudah melalui platform catering eksklusif kami.Fokus pada
                                kuliah
                                Anda, biarkan kami mengurus masalah kuliner Anda.
                            </p>
                            {{-- Desktop --}}
                            <p
                                class="mt-4 md:mt-[10px] md:text-md md:max-w-2xl xl:text-lg xl:mt-[50px] hidden md:block">
                                Temukan makanan lezat dengan mudah melalui platform catering eksklusif kami.
                                Fokus pada kuliah Anda, biarkan kami mengurus masalah kuliner Anda.
                            </p>
                        </div>
                        <div class=" flex justify-center md:justify-start ">
                            <a href="{{ route('menu.show-Normal') }}"
                                class="mt-[30px] text-white bg-merahMM hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 duration-700">Mulai
                                Perjalanan</a>
                        </div>
                    </div>

                    {{-- Right Section --}}
                    <div class="order-1 md:order-2 hero__img">
                        <img src="{{ asset('img/page/home/hero-image.png') }}" class="" alt="MealMingle Hero">
                    </div>
                </div>
            </div>
        </section>

        {{-- stats section --}}
        <section class="mt-[-200px] md:mt-[-65px]" id="stats">
            <div class="relative">
                <div class="absolute inset-0 h-1/2"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto">
                        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                            <div
                                class="stat-item flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r ">
                                <div class="pengguna">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Pengguna</dt>
                                    <dd class="order-1 text-5xl font-extrabold text-merahMM">{{ $user }}</dd>
                                </div>
                            </div>
                            <div
                                class="stat-item flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r ">
                                <div class="tenant">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500 ">Tenant</dt>
                                    <dd class="order-1 text-5xl font-extrabold text-merahMM">{{ $tenant }}</dd>
                                </div>
                            </div>
                            <div
                                class="stat-item flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <div class="universitas">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Universitas
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-merahMM">1</dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>



        </section>

        {{-- about section --}}
        <section class="bg-merahMM mt-[-350px] md:mt-[-105px] text-center aboutbg" id="about">
            <div class="py-12 mt-[190px] md:mt-10 about">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-[130px] md:mt-10">
                    <div class="lg:text-center">
                        <h2 class="text-base text-kuningMM font-semibold tracking-wide uppercase">Apa Sih MealMingle
                        </h2>
                        <div class="text-center w-full">
                            <h1 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-kuningMM sm:text-4xl">
                                Solusi
                                Catering Mahasiswa</h1>
                            <h3 class="mt-4 text-base text-white lg:mx-auto text-center">Temukan makanan
                                praktis
                                dan enak tanpa repot mencari. Kami membebaskanmu dari kekhawatiran mencari makanan yang
                                sesuai dengan anda,
                                sehingga perkuliahanmu jadi lebih fokus dan tenang.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- eksplor section --}}
        <section class="flex flex-col justify-center mt-20" id="eksplor">
            {{-- ukuran Kiri kanan --}}
            <div class="px-4 md:mx-24 ">
                {{-- pembungkus --}}
                <div class="flex items-center flex-col md:flex-row md:justify-between md:gap-10">
                    {{-- kiri --}}
                    <div class="md:w-1/2 flex justify-center mx-auto">
                        <img src="{{ asset('img/page/home/eksplor-image.png') }}" alt="foto eksplor" srcset="">
                    </div>

                    {{-- kanan --}}
                    <div class="md:w-2/3">
                        <h1 class="font-bold text-3xl mt-5 text-center md:text-left md:text-lg xl:text-3xl xl:w-2/3">
                            Eksplor
                            Makanan
                            Favorit di
                            Sekitar Kampus
                            Anda.</h1>
                        <p class="mt-5 md:text-base xl:w-2/3 text-justify leading-8">Eksplorasi kuliner terbaik di
                            sekitar
                            kampus
                            dengan
                            kami.
                            Rasakan cita rasa unik dan nikmati pengalaman makanan yang tak terlupakan.
                            Mulailah petualangan kuliner Anda sekarang</p>
                        <div class="flex justify-center md:justify-start">
                            <button type="button"
                                class="mt-[30px] text-black bg-kuningMM hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-300 font-bold rounded-lg text-sm px-8 py-2.5 me-2 mb-2 duration-700">Eksplor</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Testimoni section --}}
        <section class="flex flex-col justify-center mt-20 bg-kuningMM p-3" id="testimoni">
            <div class="px-4 md:mx-24">
                <div class="lg:text-center">
                    <h2 class="text-base text-merahMM font-semibold tracking-wide uppercase">Testimonial</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-merahMM sm:text-4xl">Apa Kata
                        Mereka?</p>
                </div>

                {{-- testimoni --}}
                <figure class="max-w-screen-md mx-auto text-center mt-5">
                    <svg class="w-10 h-10 mx-auto mb-3 text-black dark:text-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                    <blockquote>
                        <p class="text-2xl italic font-medium text-black dark:text-white">“Saya sangat senang dengan
                            pengalaman menggunakan layanan catering di MealMingle”</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                        <img class="w-6 h-6 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                            alt="profile picture">
                        <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-black dark:divide-black">
                            <cite class="pe-3 font-medium text-black dark:text-white">Risky</cite>
                            <cite class="ps-3 text-sm text-black dark:text-black">Mahasiswa di Universitas
                                Ciputra</cite>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </section>

        {{-- FAQ section --}}
        <section class="flex flex-col justify-center mt-20 " id="faq">
            <div class="px-4 md:mx-24">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="">
                    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
                        <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
                            <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">Frequently Asked
                                Questions</h2>
                            <!-- HTML -->
                            <dl class="mt-6 space-y-6 divide-y divide-gray-200">
                                <div x-data="{ open: false }">
                                    <dt class="text-lg faqtitle">
                                        <button type="button" @click="open = !open" aria-controls="faq-1"
                                            :aria-expanded="open.toString()"
                                            class="text-left w-full flex justify-between items-start text-gray-400">
                                            <span class="font-medium text-gray-900">Bagaimana caranya memesan makanan
                                                di
                                                platform ini?</span>
                                            <span class="ml-6 h-7 flex items-center">
                                                <svg :class="{ 'rotate-0': !open, 'rotate-180': open }"
                                                    class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </span>
                                        </button>
                                    </dt>
                                    <dd class="mt-2 pr-12" id="faq-1" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 transform scale-95"
                                        x-transition:enter-end="opacity-100 transform scale-100"
                                        x-transition:leave="transition ease-in duration-200"
                                        x-transition:leave-start="opacity-100 transform scale-100"
                                        x-transition:leave-end="opacity-0 transform scale-95">
                                        <p class="text-base text-gray-500">
                                            1.Login atau Daftar Akun: Pastikan Anda telah login atau mendaftar di
                                            platform
                                            kami.<br><br>
                                            2.Pilih Tenant dan Menu: Explore menu dari berbagai tenant catering yang
                                            bekerja
                                            sama dengan kami yang berada di area Universitas anda. Pilih menu dan jumlah
                                            pesanan sesuai keinginan Anda.<br><br>
                                            3.Tambahkan ke Keranjang: Setelah memilih menu, tambahkan item ke keranjang
                                            belanja Anda.<br><br>
                                            4.Checkout Pesanan : Setelah selesai memilih menu anda bisa masuk ke halaman
                                            keranjang dan mengklik tombol Checkout.<br><br>
                                            4.Pilih Metode Pembayaran: Lanjutkan ke halaman pembayaran dan pilih metode
                                            pembayaran yang diinginkan.<br><br>
                                            5.Konfirmasi Pesanan: Setelah pembayaran selesai, Anda akan menerima
                                            konfirmasi
                                            pesanan melalui email atau melalui platform kami.</p>
                                    </dd>
                                </div>
                                <div x-data="{ open: false }">
                                    <dt class="text-lg faqtitle">
                                        <button type="button" @click="open = !open" aria-controls="faq-1"
                                            :aria-expanded="open.toString()"
                                            class="text-left w-full flex justify-between items-start text-gray-400">
                                            <span class="font-medium text-gray-900">Apakah saya bisa membatalkan
                                                pesanan?</span>
                                            <span class="ml-6 h-7 flex items-center">
                                                <svg :class="{ 'rotate-0': !open, 'rotate-180': open }"
                                                    class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </span>
                                        </button>
                                    </dt>
                                    <dd class="mt-2 pr-12" id="faq-1" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 transform scale-95"
                                        x-transition:enter-end="opacity-100 transform scale-100"
                                        x-transition:leave="transition ease-in duration-200"
                                        x-transition:leave-start="opacity-100 transform scale-100"
                                        x-transition:leave-end="opacity-0 transform scale-95">
                                        <p class="text-base text-gray-500">Untuk saat ini, kami belum menyediakan fitur
                                            pembatalan pesanan.
                                            Harap pastikan untuk memeriksa pesanan Anda dengan teliti sebelum melakukan
                                            pembayaran.</p>
                                    </dd>
                                </div>
                                <div x-data="{ open: false }">
                                    <dt class="text-lg faqtitle">
                                        <button type="button" @click="open = !open" aria-controls="faq-1"
                                            :aria-expanded="open.toString()"
                                            class="text-left w-full flex justify-between items-start text-gray-400">
                                            <span class="font-medium text-gray-900">Mengapa layanan ini belum tersedia
                                                di
                                                Universitas saya?</span>
                                            <span class="ml-6 h-7 flex items-center">
                                                <svg :class="{ 'rotate-0': !open, 'rotate-180': open }"
                                                    class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </span>
                                        </button>
                                    </dt>
                                    <dd class="mt-2 pr-12" id="faq-1" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 transform scale-95"
                                        x-transition:enter-end="opacity-100 transform scale-100"
                                        x-transition:leave="transition ease-in duration-200"
                                        x-transition:leave-start="opacity-100 transform scale-100"
                                        x-transition:leave-end="opacity-0 transform scale-95">
                                        <p class="text-base text-gray-500">Kami terus berupaya untuk memperluas cakupan
                                            layanan kami ke berbagai universitas.
                                            Faktor-faktor seperti permintaan yang tinggi, ketersediaan tenant, dan
                                            faktor
                                            logistik lainnya mempengaruhi keputusan kami dalam menentukan lokasi
                                            layanan.
                                            Namun, kami terus melakukan evaluasi dan mungkin akan memperluas layanan ke
                                            universitas Anda di masa depan.</p>
                                    </dd>
                                </div>
                                <div x-data="{ open: false }">
                                    <dt class="text-lg faqtitle">
                                        <button type="button" @click="open = !open" aria-controls="faq-1"
                                            :aria-expanded="open.toString()"
                                            class="text-left w-full flex justify-between items-start text-gray-400">
                                            <span class="font-medium text-gray-900">Bagaimana prosedur bergabung
                                                menjadi
                                                tenant?</span>
                                            <span class="ml-6 h-7 flex items-center">
                                                <svg :class="{ 'rotate-0': !open, 'rotate-180': open }"
                                                    class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </span>
                                        </button>
                                    </dt>
                                    <dd class="mt-2 pr-12" id="faq-1" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 transform scale-95"
                                        x-transition:enter-end="opacity-100 transform scale-100"
                                        x-transition:leave="transition ease-in duration-200"
                                        x-transition:leave-start="opacity-100 transform scale-100"
                                        x-transition:leave-end="opacity-0 transform scale-95">
                                        <p class="text-base text-gray-500">1. Hubungi kami melalui kontak WhatsApp
                                            berikut:
                                            <br>
                                            <span>
                                                <a href="https://wa.me/6282226401130?text=Halo%20Mingy,%20saya%20tertarik%20untuk%20menjadi%20tenant.%20Apa%20syarat-syaratnya%20yang%20harus%20dipenuhi%3F"
                                                    target="_blank" rel="noopener noreferrer"
                                                    style="color: blue">+6282226401130</a>
                                            </span>
                                            <br><br>
                                            2. Pengajuan Permintaan: Ajukan permintaan bergabung dan sertakan informasi
                                            mengenai layanan catering yang Anda tawarkan.
                                            <br><br>
                                            3. Verifikasi dan Evaluasi: Tim kami akan melakukan verifikasi dan evaluasi
                                            terhadap vendor yang ingin bergabung.
                                            <br><br>
                                            4. Pemberitahuan Keputusan: Setelah proses evaluasi selesai, kami akan
                                            memberikan pemberitahuan mengenai status keputusan dan langkah selanjutnya.
                                            <br><br>
                                            Terima kasih atas minat Anda untuk bergabung dengan kami sebagai Tenant.
                                            Jangan
                                            ragu untuk menghubungi kami jika Anda memiliki pertanyaan lebih lanjut atau
                                            butuh bantuan.
                                        </p>
                                    </dd>

                                </div>

                            </dl>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    {{-- footer --}}
    @include('layouts.footer')

    {{-- js --}}
    <script src="{{ asset('js/home.js') }}"></script>

</body>

</html>
