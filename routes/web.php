<?php

use App\Http\Controllers\CommunityController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinamisController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/community_management', [DashboardController::class, 'community_management'])->name('community');
// Route::get('/community_management/create', [DashboardController::class, 'create_community'])->name('create_community');


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




Route::controller(DashboardController::class)->group(function(){
        Route::get('/community_management', 'community_management')->name('community.index');
        Route::get('/community_management/createCommunity','createCommunity')->name('community.create');
        Route::post('/community_management/storeCommunity', 'storeCommunity')->name('community.store');
        Route::get('/community_management/{communityId}/editCommunity', 'editCommunity')->name('community.edit');
        Route::post('/community_management/{communityId}/updateCommunity', 'updateCommunity')->name('community.update');
        Route::delete('/community_management/{communityId}/deleteCommunity', 'deleteCommunity')->name('community.delete');
});



Route::get('/', [DinamisController::class, 'home'])->name('beranda');
Route::get('/about', [DinamisController::class, 'about'])->name('tentang_desa');
Route::get('/activity', [DinamisController::class, 'activity'])->name('kegiatan');
Route::get('/community', [DinamisController::class, 'community'])->name('lembaga_komunitas');
Route::get('/catalogue', [DinamisController::class, 'catalogue'])->name('produk_desa');

// Route::resource('product', ProductController::class);

require __DIR__.'/auth.php';