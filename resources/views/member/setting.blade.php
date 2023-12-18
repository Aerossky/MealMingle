@extends('layouts.main')
@section('title', 'Menu')

@section('content')
    {{-- error validation request --}}
    <div class="mt-5">
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="p-5 md:p-10">
        <form method="POST" action="{{ route('setting.update', Auth::id()) }}" class="space-y-8 divide-y divide-gray-200">
            @csrf
            @method('PUT')
            <div class="space-y-8 divide-y divide-gray-200">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Profile</h3>
                        <p class="mt-1 text-sm text-gray-500">Lengkapi informasi profil Anda.</p>
                    </div>
                </div>

                <div class="pt-8">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-500">Pastikan informasi pribadi Anda terisi dengan benar untuk
                            memastikan akurasi dan kelancaran proses pemesanan.</p>
                    </div>
                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name </label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" autocomplete="given-name"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                    value="{{ $user->name }}">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <div class="mt-1">
                                <input type="text" name="phone_number" id="phone_number" autocomplete="family-name"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                    value="{{ $user->phone_number }}">
                            </div>
                            <p class="mt-2 text-xs text-gray-500">Pastikan nomor yang Anda masukkan terkait dengan
                                <b>WhatsApp</b>
                                untuk memudahkan komunikasi.
                            </p>
                        </div>


                        <div class="sm:col-span-3">
                            <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                            <div class="mt-1">
                                <input type="password" name="password" id="password" autocomplete="family-name"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                    placeholder="Masukkan password baru">
                            </div>
                        </div>


                        <div class="sm:col-span-3">
                            <label for="universitas_id" class="block text-sm font-medium text-gray-700"> University </label>
                            <div class="mt-1">
                                <select id="universitas_id" name="universitas_id" autocomplete="country-name"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    @foreach ($universitas as $data)
                                        @if ($data->id == $user->universitas_id)
                                            <option selected value="{{ $data->id }}">{{ $data->universitas_name }}
                                            </option>
                                        @endif
                                        <option value="{{ $data->id }}">{{ $data->universitas_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <a href="/"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</a>
                    <button type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-merahMM hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 duration-500">Save</button>
                </div>
            </div>
        </form>
    </div>

    @include('layouts.footer')
@endsection
