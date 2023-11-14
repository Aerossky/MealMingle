<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | MealMingle</title>
    {{-- tailwind --}}
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/tenant.css', 'resources/js/app.js'])

    {{-- scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body class="flex flex-col min-h-screen font-sahabatLariku">
    {{-- header --}}
    @include('layouts.header')

    {{-- width layout --}}
    <div class="flex flex-col justify-center md:mt-[80px] mt-[85px]">
        <main class="">
            @yield('content')
        </main>
    </div>

    {{-- Footer --}}
    {{-- @include('layouts.footer') --}}

</body>

</html>
