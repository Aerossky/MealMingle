<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UniversitasController;

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

// Route::get('/tenant', function () {
//     return view('member.tenant.tenant');
// });

Route::get('/tenant-detail', function () {
    return view('member.tenant.detail');
});

Route::get('/reviewweb', function () {
    return view('member.reviewweb');
});

// ADMIN
Route::get('/admin', function () {
    return view('admin.home');
});

// AUTH
Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/signup', function () {
    return view('auth.signup');
});

// TENANT ROUTE
Route::resource('tenant', TenantController::class);

// UNIVERSITAS ROUTE
Route::resource('universitas', UniversitasController::class);
Route::get('universitas/data/terhapus', [UniversitasController::class, 'deletedData'])->name('universitas.deletedData');
Route::get('universitas/data/restore/{id}', [UniversitasController::class, 'restore'])->name('universitas.restore');
Route::get('universitas/data/force-delete/{id}', [UniversitasController::class, 'forceDelete'])->name('universitas.forceDelete');

// USER ROUTE
Route::resource('user', UserController::class);
Route::get('user/data/terhapus', [UserController::class, 'deletedData'])->name('user.deletedData');
Route::get('user/data/restore/{id}', [UserController::class, 'restore'])->name('user.restore');
// Route::get('user/create', [UserController::class, 'create'])->name('user.create');
// Route::post('user/store', [UserController::class, 'store'])->name('user.store');
// Route::post('user/delete/{id}', [UserController::class, 'softDelete'])->name('user.delete');

// ADMIN
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin-tenant-add', function () {
    return view('admin.tenant.tenant-add');
});

Route::get('/admin-tenant-detail', function () {
    return view('admin.tenant.tenant-detail');
});

Route::get('/admin-menu-menu-add', function () {
    return view('admin.menu.menu-add');
});




// Route::get('login', [UserController::class, 'index'])->name('login');
