@extends('layouts.admin.main')
@section('title', 'Riwayat Pesanan Edit Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Edit Riwayat Pesanan</h1>
        <div class="">
            {{-- balik ke route sebelumnya --}}
            <a href="{{ url()->previous() }}"
                class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>
        </div>
    </div>

    {{-- Content --}}
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto">
        <form action="{{ route('riwayatpesanan.update', $riwayat_pesanan->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="grid grid-cols-2 gap-2">
                <!-- Status Pesanan -->
                @php
                    $status_terpilih = $riwayat_pesanan->transaction_status;
                @endphp

                <div class="mb-4 col-span-1">
                    <label for="transaction_status" class="block text-sm font-medium text-gray-600">Status Pesanan</label>
                    <select id="transaction_status" name="transaction_status" class="mt-1 p-2 w-full border rounded-md">
                        <option value="selesai" <?php if ($status_terpilih === 'selesai') {
                            echo 'selected';
                        } ?>>Selesai</option>
                        <option value="dibatalkan" <?php if ($status_terpilih === 'dibatalkan') {
                            echo 'selected';
                        } ?>>Dibatalkan</option>
                        <option value="konfirmasi" <?php if ($status_terpilih === 'konfirmasi') {
                            echo 'selected';
                        } ?>>Konfirmasi</option>
                        <option value="menunggu_konfirmasi" <?php if ($status_terpilih === 'menunggu_konfirmasi') {
                            echo 'selected';
                        } ?>>Menunggu Konfirmasi</option>
                    </select>
                </div>



                <!-- Tombol Kirim -->
                <div class="mt-6">
                    <button type="submit"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                        Ubah
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
