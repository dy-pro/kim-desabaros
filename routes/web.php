<?php

use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinamisController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function (){
        return view('admin.include.content');
})->middleware(AuthAdmin::class)->name("admin.index");

Route::resource('user',UserController::class);

Route::get('/login', function(){
        return view('auth.login');
});
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/manajemen_produk', [DashboardController::class, 'manajemen_produk'])->name('produk');
Route::get('/manajemen_produk/tambah_produk', [DashboardController::class, 'tambah_produk'])->name('produk');


// Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/product_management', [DashboardController::class, 'product_management'])->name('produk');
Route::get('/product_management/createProduct', [DashboardController::class, 'createProduct'])->name('tambah_produk');
Route::get('/user_management', [DashboardController::class, 'user_management'])->name('pengguna');
Route::get('/user_management/createUser', [DashboardController::class, 'createUser'])->name('tambah_pengguna');
Route::get('/category_management', [DashboardController::class, 'category_management'])->name('kategori');
Route::get('/category_management/createCategory', [DashboardController::class, 'createCategory'])->name('tambah_kategori');
Route::get('/activity_management', [DashboardController::class, 'activity_management'])->name('kegiatan');
Route::get('/activity_management/createActivity', [DashboardController::class, 'createActivity'])->name('tambah_kegiatan');
Route::get('/community_management', [DashboardController::class, 'community_management'])->name('kegiatan');
Route::get('/community_management/createCommunity', [DashboardController::class, 'createCommunity'])->name('tambah_kegiatan');



Route::get('/', [DinamisController::class, 'home'])->name('beranda');
Route::get('/about', [DinamisController::class, 'about'])->name('tentang_desa');
Route::get('/activity', [DinamisController::class, 'activity'])->name('kegiatan');
Route::get('/activity/detail_activity', [DinamisController::class, 'detail_activity'])->name('detail_kegiatan');
Route::get('/community', [DinamisController::class, 'community'])->name('lembaga_komunitas');
Route::get('/product', [DinamisController::class, 'product'])->name('produk_desa');
// Route::resource('product', ProductController::class);

require __DIR__.'/auth.php';