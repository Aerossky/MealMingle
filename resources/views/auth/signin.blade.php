<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In | MealMingle</title>
    {{-- tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex justify-center items-center">

    {{-- ipad dan laptop view --}}
    <div class="invisible md:visible md:flex md:flex-row w-0 md:w-full">
        {{-- log in --}}
        <div class="md:flex md:flex-row md:flex-1 md:bg-kuningMM md:p-8">
            <div class="max-w-md mx-auto my-auto">
                <h3 class="text-xl font-bold mb-1">Halo Mingy</h3>
                <p class="text-2xl mb-4">Selamat Datang</p>
                {{-- Alert Start --}}
                @if (session('status'))
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium"> {{ session('message') }}</span>
                    </div>
                @endif
                @if (session('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <span class="font-medium"> {{ session('success') }}</span>
                    </div>
                @endif
                {{-- Alert End --}}
                <form action="{{ route('signIn.validate') }}" method="POST">
                    @csrf
                    <input type="number" id="phone_number" name="phone_number" placeholder="Phone Number"
                        class="md:w-full md:px-4 md:py-2 ebr md:rounded md:mb-4" value="{{ old('phone_number') }}"
                        required>

                    <input type="password" id="password" name="password" placeholder="Password"
                        class="md:w-full md:px-4 md:py-2 md:border md:rounded md:mb-4" required>

                    <button type="submit"
                        class="md:bg-merahMM md:hover:bg-red-800 md:text-white md:px-4 md:py-2 md:rounded cursor-pointer md:w-full duration-500">Sign
                        In</button>
                </form>
                <p class="md:mt-4">Belum punya akun? <a href="/signup" class="md:text-merahMM font-bold">Signup
                        yuk</a>
                </p>
            </div>
        </div>

        {{-- Gambar Section Kanan --}}
        <div class="md:flex-1 md:bg-gray-200 md:justify-center md:items-center">
            <div class="md:w-fit md:h-fit md:overflow-hidden">
                <img src="{{ asset('img/page/signin/logineg.jpeg') }}" alt=""
                    class="md:object-cover md:w-screen md:h-screen">
            </div>
        </div>
    </div>

    {{-- mobile view --}}
    <div class="md:hidden bg-kuningMM w-full h-screen">
        <div class="flex flex-col p-8 m-8">
            <img src="{{ asset('img/logo.png') }}" alt="logo meal mingle" class="p-5">
            <div class="mx-auto my-auto">
                <h3 class="text-xl font-bold mb-1">Halo Mingy</h3>
                <p class="text-2xl mb-4">Selamat Datang</p>
                <form action="{{ route('signIn.validate') }}" method="POST">
                    @csrf
                    <input type="number" id="phone_number" name="phone_number" placeholder="Phone"
                        class="w-full px-4 py-2 border rounded mb-4" value="{{ old('email') }}" required>

                    <input type="password" id="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 border rounded mb-4" required>

                    <button type="submit"
                        class="bg-merahMM hover:bg-red-700 text-white px-4 py-2 rounded cursor-pointer w-full">Sign
                        In</button>
                </form>
                <p class="mt-4">Belum punya akun? <a href="/signup" class="text-merahMM font-bold">Signup yuk</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
