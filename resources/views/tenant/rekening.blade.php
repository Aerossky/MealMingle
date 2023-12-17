@extends('layouts.tenant.main')
@section('title', 'Rekening Saya')

@section('content')

    <main>
        {{-- menampilkan rekening dan juga edit rekening --}}
        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl font-bold text-gray-900">Rekening Saya</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <!-- Replace with your content -->
                <div class="py-4">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div class="flex flex-col">
                                <h1 class="text-2xl font-semibold text-gray-900 pb-2 md:pb-5">Rekening Anda</h1>
                                <div class="flex justify-between flex-col md:flex-row">
                                    <div class="flex">
                                        <div class="flex flex-col">
                                            <h1 class="text-xl font-semibold text-gray-900">Bank BCA</h1>
                                            <h1 class="text-xl font-semibold text-gray-900">a/n. John Doe</h1>
                                            <h1 class="text-xl font-semibold text-gray-900">1234567890</h1>
                                        </div>
                                    </div>
                                    <div class="flex justify-end md:justify-normal py-5">
                                        <div class="flex flex-col">
                                            <a href="" class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-md">Edit Rekening</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /End replace -->
                </div>
            </div>
    </main>
    </main>

@endsection
