@extends('layouts.admin.main')
@section('title', 'Ulasan Admin')

@section('content')

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-2xl py-5">Ulasan</h1>
    </div>

    {{-- Content --}}
    <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto">

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ulasan
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @if ($ulasan->isEmpty())
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center">Tidak ada ulasan yang tersedia.</td>
                        </tr>
                    @else
                        @foreach ($ulasan as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4">{{ $data->name }}</td>
                                <td class="px-6 py-4">{{ $data->email }}</td>
                                <td class="px-6 py-4">{{ $data->deskripsi }}</td>
                                <td class="px-6 py-4">

                                    <form action="{{ route('ulasan.destroy', $data->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus Ulasan ini?')">Delete<span
                                                class="sr-only"></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>

    </div>
@endsection
