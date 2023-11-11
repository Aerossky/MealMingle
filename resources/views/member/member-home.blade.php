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

<body class="flex flex-col min-h-screen font-sahabatLariku bg-kuningMM">
    {{-- header --}}
    @include('layouts.header')

    {{-- hero section --}}
    <section class="flex flex-col justify-center md:mt-[110px] mt-[90px]">
        <div class="mx-24">
            {{-- pembungkus --}}
            <div class="flex items-center flex-col md:flex-row">
                {{-- Left Section --}}
                <div class="w-2/3">
                    <h1 class="font-bold text-4xl">Teman Makan Mahasiswa<br>
                        Selama Perjalanan <span class="text-merahMM">Kuliah</span>.
                    </h1>
                    <p class="mt-[50px]">
                        Temukan makanan lezat dengan mudah melalui platform catering eksklusif kami. <br>
                        Fokus pada kuliah Anda, biarkan kami mengurus masalah kuliner Anda.
                    </p>
                    <button type="button"
                        class="mt-[30px] text-white bg-merahMM hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2">Pesan</button>

                </div>

                {{-- Right Section --}}
                <div class="">
                    <img src="{{ asset('img/hero-image.png') }}" class="" alt="Flowbite Logo">
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    {{-- @include('layouts.footer') --}}


</body>

</html>
