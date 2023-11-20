<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | MealMingle Admin</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/tenant.css', 'resources/js/app.js'])
</head>

<body class="font-Montserrat overflow-x-hidden md:overflow-x-auto">

    {{-- Sidebar --}}
    @include('layouts.admin.navigation')

    {{-- Content --}}
    <div class="p-4 sm:ml-64">
        @yield('content')
    </div>

</body>

</html>
