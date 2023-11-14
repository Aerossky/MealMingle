@extends('layouts.main')
@section('title', 'Review')

@section('content')

    <div class="bg-merahMM text-white py-6 h-screen flex items-center">
        <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-24">
            <div class="flex flex-col w-full lg:w-1/3 p-8">
                <h1 class="text-4xl font-bold">Leave us a feedback !</h2>
                    <br>
                    <h5 class="text-lg font-normal">abcdefgaaaaaaaaaaaaaaaa<br>abcdefgaaaaaaaaaaa </h5>
            </div>
            <div class="flex flex-col w-full lg:w-2/3 justify-center">
                <div class="container w-full px-4">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-6/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                                <div class="flex-auto p-5 lg:p-10 border border-4 border-kuningMM  rounded-lg">
                                    <h4 class="text-2xl mb-4 text-black font-semibold">abcdefg</h4>
                                    <form id="feedbackForm" action="" method="">
                                        <div class="relative w-full mb-3 ">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                for="message">Message</label>
                                            <textarea maxlength="300" name="feedback" id="feedback" rows="5" cols="90"
                                                class="border-2 px-3 py-3 bg-gray-300 placeholder-black text-gray-800 rounded text-sm shadow focus:outline-none w-full"
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
