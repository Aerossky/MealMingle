@extends('layouts.main')
@section('title', 'Review')

@section('content')


    <section
        class="bg-center bg-cover bg-no-repeat bg-[url('/public/img/page/home/eksplor-image.png')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">We invest
                in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
                markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>

    <div class="bg-merahMM text-white py-6 h-screen flex items-center">
        <div class="container flex flex-col md:flex-row my-6 md:mx-32 md:my-24">
            <div class="flex flex-col w-full md:w-1/3 p-8 md:pt-16">
                <h1 class="text-4xl font-bold">Leave us a feedback !</h2>
                    <br>
                    <h5 class="text-lg font-normal">abcdefgaaaaaaaaaaaaaaaa<br>abcdefgaaaaaaaaaaa </h5>
            </div>
            <div class="flex flex-col w-full md:w-2/3 justify-center md:ms-40">
                <div class="container w-full px-4">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                                <div class="flex-auto p-5 lg:p-10 border border-4 border-kuningMM  rounded-lg">
                                    <h4 class="text-2xl mb-4 text-black font-semibold">abcdefg</h4>
                                    <form id="feedbackForm" action="" method="" class="w-fit">
                                        <div class="relative w-full mb-3 ">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1"
                                                for="message">Nama</label>
                                            <input type="text"
                                                class="border-2 w-full md:w-3/4 bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1"
                                                for="message">Email</label>
                                            <input type="text"
                                                class="border-2 w-full md:w-3/4 bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1"
                                                for="message">Message</label>
                                            <textarea maxlength="500" name="feedback" id="feedback" rows="7" cols="60"
                                                class="w-full border-2 px-3 py-3 bg-gray-50 border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3"
                                                placeholder="" required></textarea>

                                        </div>
                                        <div class="text-right mt-6">
                                            <button id="feedbackBtn"
                                                class="bg-kuningMM text-black text-center mx-auto text-sm font-bold px-6 py-3 rounded-lg outline-none focus:outline-none mr-1 mb-1 hover:bg-merahMM"
                                                type="submit" style="transition: all 0.15s ease 0s;">Send
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
