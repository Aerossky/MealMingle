<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | MealMingle</title>
    {{-- tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen font-sahabatLariku ">
    {{-- header --}}
    @include('layouts.header')

    {{-- hero section --}}
    <section class="flex flex-col justify-center mt-20 md:mt-[85px] bg-kuningMM pb-[250px] md:pb-20">
        {{-- ukuran Kiri kanan --}}
        <div class="px-4 md:mx-24">
            {{-- pembungkus --}}
            <div class="flex items-center flex-col md:flex-row">
                {{-- Left Section --}}
                <div class="md:w-2/3 order-2 md:order-1">
                    <h1 class="font-bold text-center text-2xl md:text-left md:text-4xl">Teman Makan Mahasiswa<br>
                        Selama Perjalanan <span class="text-merahMM">Kuliah</span>.
                    </h1>
                    {{-- mobile --}}
                    <p class="mt-4 md:mt-[50px] md:hidden">
                        Temukan makanan lezat dengan mudah melalui platform catering eksklusif kami.Fokus pada kuliah
                        Anda, biarkan kami mengurus masalah kuliner Anda.
                    </p>
                    {{-- Desktop --}}
                    <p class="mt-4 md:mt-[50px] hidden md:block">
                        Temukan makanan lezat dengan mudah melalui platform catering eksklusif kami. <br>
                        Fokus pada kuliah Anda, biarkan kami mengurus masalah kuliner Anda.
                    </p>
                    <div class=" flex justify-center md:justify-start">
                        <button type="button"
                            class="mt-[30px] text-white bg-merahMM hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2">Pesan</button>
                    </div>
                </div>

                {{-- Right Section --}}
                <div class="order-1 md:order-2">
                    <img src="{{ asset('img/hero-image.png') }}" class="" alt="Flowbite Logo">
                </div>
            </div>
        </div>
    </section>

    {{-- stats section --}}
    <section class="mt-[-200px] md:mt-[-65px]">
        <div class="relative">
            <div class="absolute inset-0 h-1/2"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                        <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Pengguna</dt>
                            <dd class="order-1 text-5xl font-extrabold text-merahMM">10</dd>
                        </div>
                        <div
                            class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Tenant</dt>
                            <dd class="order-1 text-5xl font-extrabold text-merahMM">5</dd>
                        </div>
                        <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Universitas</dt>
                            <dd class="order-1 text-5xl font-extrabold text-merahMM">10+</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>


    </section>


    {{-- Footer --}}
    {{-- @include('layouts.footer') --}}


</body>

</html>
