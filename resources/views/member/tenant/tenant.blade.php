@extends('layouts.main')
@section('title', 'Tenant')

@section('content')
    {{-- jarak kiri kanan --}}
    <div class="px-4 md:px-48">
        <div class="mt-3">
            <form>
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white ">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-merahMM hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

        </div>

        {{-- Tenant Card --}}
        <div class="bg-white font-Montserrat md:px-14">
            <div class="sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="md:flex md:items-center md:justify-between mt-5">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Tenant</h2>
                </div>

                {{-- DEV --}}
                <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                    <div class="group relative">
                        <div
                            class="w-full h-56 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                            <img src="{{ asset('img/tenant/apple.jpg') }}" alt="Hand stitched, orange leather long wallet."
                                class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">
                            <a href="/tenant-detail">
                                <span class="absolute inset-0"></span>
                                PapaJoe's
                            </a>
                        </h3>
                    </div>
                    <!-- More products... -->

                </div>
            </div>
        </div>
    </div>

@endsection
