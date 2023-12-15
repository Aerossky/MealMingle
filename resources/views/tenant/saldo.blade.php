@extends('layouts.tenant.main')
@section('title', 'Saldo Saya')

@section('content')

    <main>
        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl font-bold text-gray-900">Saldo Saya</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <!-- Replace with your content -->
                <div class="py-4">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div class="text-2xl">
                                <h1 class="text-2xl font-semibold text-gray-900">Saldo Anda</h1>
                                {{-- <h1 class="text-2xl font-semibold text-gray-900">Rp. {{ number_format($saldo, 0, ',', '.') }}</h1> --}}
                                <h1 class="text-2xl font-semibold text-gray-900">Rp. 20000,00</h1>
                            </div>
                            <div class="text-large mt-10 flex justify-end">
                                {{-- cairkan dana button --}}
                                <a href="" class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-md">Cairkan Dana</a>
                            </div>
                            {{-- tabel pemasukan --}}
                            <div class="mt-10 overflow-auto">
                                <h1 class="text-2xl font-semibold text-gray-900 pb-2 md:pb-5">Riwayat Pemasukan</h1>
                                <table class="table-auto w-full border ">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-2 border">No</th>
                                            <th class="px-4 py-2 border">Tanggal</th>
                                            <th class="px-4 py-2 border">Keterangan</th>
                                            <th class="px-4 py-2 border">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- start loop disini --}}
                                        {{-- JANGAN LUPA BUAT CONDITIONAL KALO ROW GENAP WARNA GREY --}}
                                        <tr>
                                            <td class="border px-4 py-2">1</td>
                                            <td class="border px-4 py-2">2021-01-01</td>
                                            <td class="border px-4 py-2">Pemasukan</td>
                                            <td class="border px-4 py-2">Rp. 10000</td>
                                        </tr>
                                        {{-- end loop disini --}}
                                        <tr class="bg-gray-100">
                                            <td class="border px-4 py-2">2</td>
                                            <td class="border px-4 py-2">2021-01-01</td>
                                            <td class="border px-4 py-2">Pemasukan</td>
                                            <td class="border px-4 py-2">Rp. 10000</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">3</td>
                                            <td class="border px-4 py-2">2021-01-01</td>
                                            <td class="border px-4 py-2">Pemasukan</td>
                                            <td class="border px-4 py-2">Rp. 10000</td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <!-- /End replace -->
            </div>
        </div>
    </main>

@endsection
