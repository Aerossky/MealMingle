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
    return view('member.home');
});

Route::get('/tenant', function () {
    return view('member.tenant.tenant');
});

Route::get('/tenant-detail', function () {
    return view('member.tenant.detail');
});

// AUTH
Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/signup', function () {
    return view('auth.signup');
});

// ADMIN
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/admin-tenant', function () {
    return view('admin.tenant.tenant ');
});

Route::get('/admin-tenant-add', function () {
    return view('admin.tenant.tenant-add');
});
