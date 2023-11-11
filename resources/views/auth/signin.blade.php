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

    <div class="flex flex-col md:flex-row w-full">
        {{-- log in --}}
        <div class="flex flex-row flex-1 md:flex-1 bg-kuningMM p-8">
            <div class="max-w-md mx-auto my-auto">
                <h3 class="text-xl font-bold mb-1">Halo Mingy</h3>
                <p class="text-2xl mb-4">Selamat Datang</p>
                <form action="" method="POST">
                    @csrf
                    <input type="email" id="email" name="email" placeholder="Email"
                        class="w-full px-4 py-2 border rounded mb-4" required>
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 border rounded mb-4" required>

                    <button type="submit"
                        class="bg-merahMM hover:bg-red-700 text-white px-4 py-2 rounded cursor-pointer w-full">Sign
                        In</button>
                </form>
                <p class="mt-4">Belum punya akun? <a href="" class="text-merahMM">daftar yuk</a></p>
            </div>
        </div>

        {{-- Gambar Section Kanan --}}
        <div class="flex-1 md:flex-1 bg-gray-200 justify-center items-center">
            <div class="w-fit h-fit overflow-hidden">
                <img src="{{ asset('img/signin/logineg.jpeg') }}" alt="" class="object-cover w-screen h-screen">
            </div>
        </div>
    </div>
</body>

</html>
