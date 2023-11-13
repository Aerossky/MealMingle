<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | MealMingle</title>
    {{-- tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .vertical-text {
            writing-mode: vertical-rl;
            text-orientation: sideways-right;
            white-space: nowrap;
            position: absolute;
            top: 20px;
            right: 0;
            transform: rotate(180deg)
                /* transform: translateY(100%); */
        }
    </style>
</head>

<body class="flex justify-center items-center  font-Montserrat md:overflow-hidden">
    <div class="flex md:flex-row w-full h-full justify-center items-center bg-kuningMM md:h-[100vh]">
        {{-- BAGIAN KIRI INPUT BOX --}}
        <div class="sm:w-full md:w-4/5 p-8 ">
            <div class="lg:hidden flex justify-center items-center">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <div class="mx-auto my-auto">
                <p class="text-left sm:pt-5 md:mt-5 text-4xl font-bold">Sign Up Your Account</p>
                <form class="mt-14" action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="md:grid sm:grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-6">

                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Lengkap</label>
                            <input type="text" id="name" name="name"
                                class="w-full bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nama Lengkap" required>
                        </div>

                        <div class="mb-6">
                            <label for="jenis_kelamin"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                            <select id="jenis_kelamin" name="jenis_kelamin"
                                class="w-full bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="male">Pria</option>
                                <option value="female">Wanita</option>
                            </select>
                        </div>

                        <div class="mb-6">

                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Email" required>
                        </div>

                        <div class="mb-6">
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input type="text" id="alamat" name="alamat"
                                class="w-full bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Address" required>
                        </div>

                        <div class="mb-6">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                password</label>
                            <input type="password" id="password" name="password"
                                class="w-full bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>

                        <div class="mb-6">
                            <label for="universitas"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">University</label>
                            <select id="universitas" name="universitas"
                                class="w-full bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($options as $value)
                                    <option value="{{ $value->id }}">
                                        {{ $value->universitas }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- tanggal tidak ada di db kalau mau ditambah --}}
                        {{-- <div class="mb-6 md:col-span-full">
                            <label for="dateofbirth"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Of
                                Birth</label>
                            <input type="date" name="birth" id="birth"
                                class="w-full bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div> --}}

                        <div class="mb-6 col-span-2 md:w-full flex justify-center items-center flex-col gap-2 md:gap-0">
                            <button type="submit"
                                class="w-full md:w-1/2 text-sm font-medium text-white bg-merahMM hover:bg-red-700 px-4 py-2 rounded text-center">Submit</button>
                            {{-- Redirect --}}
                            <p class="md:mt-4">Sudah punya akun? <a href="/signin"
                                    class="md:text-merahMM font-bold">login yuk</a>
                            </p>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{-- BAGIAN KANAN GAMBAR --}}
    <div class="hidden lg:flex flex-col lg:w-1/4 bg-white">
        <h2 class="text-2xl font-extrabold mb-4 vertical-text text-merahMM ">Cepat, Aman & Praktis</h2>
        <div class="w-full flex justify-center">
            <img src="{{ asset('img/logo.png') }}" alt="" class="max-w-full bottom-0 fixed mb-4">
        </div>

    </div>

</body>

</html>
