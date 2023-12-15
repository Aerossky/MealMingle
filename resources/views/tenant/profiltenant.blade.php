@extends('layouts.tenant.main')
@section('title', 'Profil Tenant')

@section('content')
    <main>
        {{-- menampilkan data tenant --}}
        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl font-bold text-gray-900">Profil Tenant</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <!-- Replace with your content -->
                <div class="py-4">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div class="flex flex-col">
                                <h1 class="text-2xl font-semibold text-gray-900 pb-2 md:pb-5">Profil Anda</h1>
                                <div class="flex justify-between flex-col">
                                    <div class="flex flex-col">
                                        <div class="rounded-full">
                                            <img src="{{ asset('img/logo.png') }}" alt="tenant"
                                                class="w-40 h-40 rounded-full border">
                                        </div>
                                        <div class="grid grid-row-2 gap-5">
                                            <div class="flex flex-col col-span-6 w-full md:w-full">
                                                <h1 class="text-xl font-semibold text-gray-900">Nama Tenant</h1>
                                                <div class="border rounded-md p-2">
                                                    <h2 class="text-large font-medium w-full text-gray-900">
                                                        Meal Mingle
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="flex flex-col col-span-6 w-full md:w-full">
                                                <h1 class="text-xl font-semibold text-gray-900">Deskripsi</h1>
                                                <div class="border rounded-md">
                                                    {{-- deskripsi tenant --}}
                                                    <p class="p-2">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                                                        voluptatum
                                                        voluptates
                                                        quibusdam, quia, quos, voluptate voluptatibus quod quas
                                                        voluptatem
                                                        doloribus
                                                        voluptas
                                                        quidem. Quisquam voluptatum voluptates quibusdam, quia, quos,
                                                        voluptate
                                                        voluptatibus quod quas voluptatem doloribus voluptas quidem.
                                                        Quisquam
                                                        voluptatum voluptates quibusdam, quia, quos, voluptate
                                                        voluptatibus
                                                        quod
                                                        quas
                                                        voluptatem doloribus voluptas quidem. Quisquam voluptatum
                                                        voluptates
                                                        quibusdam,
                                                        quia, quos, voluptate voluptatibus quod quas voluptatem
                                                        doloribus
                                                        voluptas
                                                        quidem.
                                                        Quisquam voluptatum voluptates quibusdam, quia, quos, voluptate
                                                        voluptatibus quod quas voluptatem doloribus voluptas quidem.
                                                        Quisquam
                                                        voluptatum voluptates quibusdam, quia, quos, voluptate
                                                        voluptatibus
                                                        quod
                                                        quas
                                                        voluptatem doloribus voluptas quidem. Quisquam voluptatum
                                                        voluptates
                                                        quibusdam,
                                                        quia, quos, voluptate voluptatibus quod quas voluptatem
                                                        doloribus
                                                        voluptas
                                                        quidem.
                                                        Quisquam voluptatum voluptates quibusdam, quia, quos, voluptate
                                                        voluptatibus quod quas voluptatem doloribus voluptas quidem.
                                                        Quisquam
                                                        voluptatum voluptates quibusdam, quia, quos, voluptate
                                                        voluptatibus
                                                        quod
                                                        quas
                                                        voluptatem doloribus voluptas quidem. Quisquam voluptatum
                                                        voluptates
                                                        quibusdam,
                                                        quia, quos, voluptate voluptatibus quod quas voluptatem
                                                        doloribus
                                                        voluptas
                                                        quidem.
                                                        Quisquam voluptatum voluptates quibusdam, quia, quos, voluptate
                                                        voluptatibus quod quas voluptatem doloribus voluptas quidem.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex justify-end sm:justify-normal py-5">
                                        <div class="flex flex-col">
                                            <a href=""
                                                class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-md">Edit
                                                Profil</a>
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
@endsection
