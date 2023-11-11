<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('member.member-home');
});

Route::get('/tenant', function () {
    return view('member.member-tenant');
});
Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/register', function () {
    return view('auth.register');
});
