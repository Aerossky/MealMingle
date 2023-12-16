@extends('layouts.tenant.main')
@section('title', 'Home Tenant')

@section('content')

    <div class="space-y-7 bg-white">

        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-8 md:gap-6">
                <div class="md:col-span-2 lg:col-span-1">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Foto Menu</label>
                        <div class="mt-1">
                            <label for="file-input"
                                class="cursor-pointer bg-kuningMM py-2 px-3 rounded-md shadow-sm text-sm leading-4 font-medium text-white hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-2 block">
                                Unggah Foto
                            </label>
                            <input id="file-input" type="file" class="hidden md:max-w-xs">
                        </div>
                    </div>
                </div>
            </div>

            <form class="space-y-6 mt-5" action="#" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-span-1 md:col-span-2">
                        <label for="nama-menu" class="block text-sm font-medium text-gray-700">Nama Menu</label>
                        <div class="mt-1 flex rounded-md">
                            <input type="text" name="nama-menu" id="nama-menu"
                                class="focus:ring-merahMM focus:border-merahMM flex-1 block w-full rounded-md sm:text-sm border-kuningMM"
                                placeholder="tes" value="tes tes">
                        </div>
                    </div>
                </div>

                <div>
                    <label for="deskripsi-menu" class="block text-sm font-medium text-gray-700">Deskripsi
                        Menu</label>
                    <div class="mt-1">
                        <textarea id="deskripsi-menu" name="about" rows="3"
                            class="shadow-sm focus:ring-merahMM focus:border-merahMM  block w-full sm:text-sm border-kuningMM rounded-md"
                            placeholder="tes">tes tes tes</textarea>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-6">
                    <div class="col-span-3 md:col-span-2">
                        <label for="harga-menu" class="block text-sm font-medium text-gray-700">Harga</label>
                        <div class="mt-1 flex rounded-md">
                            <input type="number" name="harga" id="harga-menu"
                                class="md:max-w-xs flex-1 block w-full rounded-md sm:text-sm border-kuningMM focus:ring-merahMM focus:border-merahMM "
                                placeholder="123" value="123456">
                        </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2 mt-4 md:mt-0">
                        <label for="kategori-menu" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <div class="mt-1 flex rounded-md">
                            <select id="kategori-menu" name="kategori-menu"
                                class="flex-1 block w-full rounded-md sm:text-sm border-kuningMM md:max-w-xs">
                                <option value="option1">Option 1</option>
                                <option value="option2" selected>Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="flex justify-end mt-5">
            <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-merahMM hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Simpan</button>
        </div>
    </div>

@endsection
