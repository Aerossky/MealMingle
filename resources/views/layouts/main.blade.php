<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | MealMingle</title>
    {{-- tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen font-sahabatLariku">
    {{-- header --}}
    @include('layouts.header')

    {{-- width layout --}}
    <div class="flex flex-col justify-center md:mt-[110px] mt-[90px]">
        <main class="px-7">
            @yield('content')
        </main>
    </div>

    {{-- Footer --}}
    {{-- @include('layouts.footer') --}}

</body>

</html>

