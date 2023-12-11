<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UlasanWebsiteController;
use App\Http\Controllers\UniversitasController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KeranjangItemController;
use App\Models\Keranjang;
use App\Models\RiwayatPesanan;

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

Route::get('/', [DashboardController::class, 'memberDashboard'])->name('member.dashboard');

Route::get('/detailriwayatpesanan', function () {
    return view('member.detailriwayatpesanan');
});
// AUTH
Route::middleware('guest')->group(
    function () {
        Route::get('/signin', [AuthController::class, 'signIn'])->name('signIn');
        Route::post('/signin', [AuthController::class, 'validateSigIn'])->name('signIn.validate');
    }
);

Route::get('/signup', [AuthController::class, 'signUp'])->name('signup');
Route::post('/signup', [AuthController::class, 'storeData'])->name('signup.storeData');
Route::post('/logout', [AuthController::class, 'logout']);

// Show menu kepada customer dan belum login
Route::get('menus/showmenu', [MenuController::class, 'show'])->name('menu.show-Normal');
Route::get('menus/showmenu-detail/{menu}', [MenuController::class, 'showDetail'])->name('menu.show-detail');
Route::get('filteredMenus', [MenuController::class, 'showFiltered'])->name('menu.show-Filtered');

// Keranjang Route
Route::resource('keranjang', KeranjangController::class);
Route::get('/keranjang', [KeranjangController::class, 'indexuser'])->name('keranjang.indexuser');
Route::post('/keranjang-checkout', [KeranjangController::class, 'checkout'])->name('keranjang.checkout');
Route::delete('/keranjang-remove/{id}', [KeranjangController::class, 'removeItem'])->name('keranjang.remove');

// Keranjang Item Route
Route::resource('keranjangitem', KeranjangItemController::class);
Route::post('/keranjangitem/tambah/{id}', [KeranjangItemController::class, 'tambah'])->name('keranjangitem.tambah');
Route::delete('/keranjang/hapus', [KeranjangItemController::class, 'hapus'])->name('keranjangitem.hapus');

// Review
Route::get('/ulasan-pengguna', function () {
    return view('member.review');
});
// ADMIN
Route::middleware(['auth'])->group(
    function () {
        // ADMIN(MAIN)
        Route::get('/admin-dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');


        // Tenant Route
        Route::resource('tenant', TenantController::class);

        // Keranjang Route
        // Route::resource('keranjang', KeranjangController::class);

        // Riwayat Pesanan Route
        Route::resource('riwayatpesanan', RiwayatPesananController::class);

        // Menu Route
        Route::resource('menu', MenuController::class);
        Route::get('menu/add-menu/{id}', [MenuController::class, 'create'])->name('menu.add-menu');
        Route::post('menu/store-menu/{id}', [MenuController::class, 'store'])->name('menu.store-menu');
        Route::get('menu/edit-menu/{menuId}/tenant/{tenantId}', [MenuController::class, 'edit'])->name('menu.edit-menu');
        Route::post('menu/update-menu/{menuId}/tenant/{tenantId}', [MenuController::class, 'update'])->name('menu.update-menu');
        Route::delete('menu/delete-menu/{menuId}/tenant/{tenantId}', [MenuController::class, 'destroy'])->name('menu.delete-menu');
        // Menu SoftDelete
        Route::get('tenant/{tenantId}/menu/data/terhapus', [MenuController::class, 'deletedData'])->name('menu.deletedData');
        Route::get('tenant/{tenantId}/menu/data/restore/{id}', [MenuController::class, 'restore'])->name('menu.restore');
        Route::get('tenant/{tenantId}/menu/data/terhapus/{id}', [MenuController::class, 'forceDelete'])->name('menu.forceDelete');

        // UNIVERSITAS ROUTE
        Route::resource('universitas', UniversitasController::class);
        Route::get('universitas/data/terhapus', [UniversitasController::class, 'deletedData'])->name('universitas.deletedData');
        Route::get('universitas/data/restore/{id}', [UniversitasController::class, 'restore'])->name('universitas.restore');
        Route::get('universitas/data/force-delete/{id}', [UniversitasController::class, 'forceDelete'])->name('universitas.forceDelete');

        // USER ROUTE
        Route::resource('user', UserController::class);
        Route::get('user/data/terhapus', [UserController::class, 'deletedData'])->name('user.deletedData');
        Route::get('user/data/restore/{id}', [UserController::class, 'restore'])->name('user.restore');
        Route::get('user/data/terhapus/{id}', [UserController::class, 'forceDelete'])->name('user.forceDelete');

        // KATEGORI ROUTE
        Route::resource('kategori', KategoriController::class);
        // Ulasan Website
        Route::resource('ulasan', UlasanWebsiteController::class);
    }
);

// TENANT
Route::middleware(['auth', 'only_tenant'])->group(function () {
    // Rute yang hanya dapat diakses oleh tenant
    Route::get('/tenant-dashboard', [DashboardController::class, 'tenantDashboard'])->name('tenant.dashboard');
});

// ROUTER HANYA UNTUK TES HALAMAN
// ADMIN
// Route::get('/admin-dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/admin-menu-menu-add', function () {
//     return view('admin.menu.menu-add');
// });

// Route::get('/tenant-detail', function () {
//     return view('member.tenant.detail');
// });

// Route::get('/tenant', function () {
//     return view('member.tenant.tenant');
// });
// Route::get('/menu', function () {
//     return view('member.listmenu');
// });


Route::get('/tesbayar', function () {
    return view('member.pembayaran');
});
