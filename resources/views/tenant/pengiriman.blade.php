@extends('layouts.tenant.main')
@section('title', 'Home Tenant')

@section('content')

    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Pengiriman</h1>
                <p class="mt-2 text-sm text-gray-700">ppppppppppppppppppppppppppppppppp
                </p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-merahMM px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blackfocus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 sm:w-auto">Download</button>
            </div>
        </div>

        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        Order ID</th>
                                    <th scope="col"
                                        class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        User</th>
                                    <th scope="col"
                                        class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Item</th>
                                    <th scope="col"
                                        class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Total Harga</th>
                                    <th scope="col"
                                        class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Status</th>
                                    <th scope="col"
                                        class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Alamat</th>
                                    <th scope="col"
                                        class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Tanggal</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td class="whitespace-nowrap text-left py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-6">
                                        #1234567</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm font-medium text-gray-900">
                                        MealMingle</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm font-medium text-gray-900">
                                        <ul class="list-disc space-y-2">
                                            <li class="flex-items-center">
                                                <span>item</span>
                                                <span class="ml-2 text-left">x1</span>
                                            </li>
                                            <li class="flex-items-center">
                                                <span>item</span>
                                                <span class="ml-2 text-left">x1</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500">Rp<span>23.000,00</span></td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500"><span
                                            class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Selesai</span>
                                    </td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500">MealMingle</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500">MealMingle</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap text-left py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-6">
                                        AAPS0L</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm font-medium text-gray-900">
                                        Chase &amp;
                                        Co.</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm font-medium text-gray-900">
                                        <ul class="list-disc space-y-2">
                                            <li class="flex-items-center">
                                                <span>item</span>
                                                <span class="ml-2 text-left">x1</span>
                                            </li>
                                            <li class="flex-items-center">
                                                <span>item</span>
                                                <span class="ml-2 text-left">x1</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500">+$4.37</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500"><span
                                            class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Selesai</span>
                                    </td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500">+$4.37</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500">+$4.37</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap text-left py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-6">
                                        AAPS0L</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm font-medium text-gray-900">
                                        Chase &amp;
                                        Co.</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm font-medium text-gray-900">
                                        <ul class="list-disc space-y-2">
                                            <li class="flex-items-center">
                                                <span>item</span>
                                                <span class="ml-2 text-left">x1</span>
                                            </li>
                                            <li class="flex-items-center">
                                                <span>item</span>
                                                <span class="ml-2 text-left">x1</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500">+$4.37</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500"><span
                                            class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Selesai</span>
                                    </td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500">+$4.37</td>
                                    <td class="whitespace-nowrap text-left px-2 py-2 text-sm text-gray-500">+$4.37</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
