<?php

use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinamisController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function (){
        return view('admin.include.content');
})->middleware(AuthAdmin::class)->name("admin.index");

Route::get('/login', function(){
        return view('auth.login');
});
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/manajemen_produk', [DashboardController::class, 'manajemen_produk'])->name('produk');
Route::get('/manajemen_produk/tambah_produk', [DashboardController::class, 'tambah_produk'])->name('produk');


// Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/manajemen_produk', [DashboardController::class, 'manajemen_produk'])->name('produk');
Route::get('/manajemen_produk/tambah_produk', [DashboardController::class, 'tambah_produk'])->name('produk');

Route::get('/', [DinamisController::class, 'beranda'])->name('beranda');
Route::get('/tentang_desa', [DinamisController::class, 'tentang_desa'])->name('tentang_desa');
Route::get('/kegiatan', [DinamisController::class, 'kegiatan'])->name('kegiatan');
Route::get('/lembaga_komunitas', [DinamisController::class, 'lembaga_komunitas'])->name('lembaga_komunitas');
Route::get('/produk_desa', [DinamisController::class, 'produk_desa'])->name('produk_desa');

Route::resource('product', ProductController::class);

require __DIR__.'/auth.php';