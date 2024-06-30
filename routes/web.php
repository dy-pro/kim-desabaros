<?php

use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinamisController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\WithLogin;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function (){
        return view('admin.include.content');
})->middleware(WithLogin::class)->name("admin.index");

Route::resource('user',UserController::class);

Route::resource('category',CategoryController::class);

Route::get('/login', function(){
        return view('auth.login');
});

Route::get('/register', [RegisteredUserController::class, 'store']);


Route::middleware(WithLogin::class)->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        
        Route::get('/user_management', [DashboardController::class, 'user_management'])->name('pengguna');
        Route::get('/user_management/createUser', [DashboardController::class, 'createUser'])->name('tambah_pengguna');

        Route::get('/category_management', [DashboardController::class, 'category_management'])->name('kategori');
        Route::get('/category_management/createCategory', [DashboardController::class, 'createCategory'])->name('tambah_kategori');


        Route::prefix('product_management')->controller(DashboardController::class)->group(function() {
                Route::get('/', 'product_management')->name('product.index');
                Route::get('/createProduct', 'createProduct')->name('product.create');
                Route::post('/storeProduct', 'storeProduct')->name('product.store');
                Route::get('/{productId}/editProduct', 'editProduct')->name('product.edit');
                Route::put('/{productId}/updateProduct', 'updateProduct')->name('product.update');
                Route::delete('/{productId}/deleteProduct', 'deleteProduct')->name('product.delete');

        });
        
        // Route::get('/manajemen_produk', [DashboardController::class, 'product_management'])->name('produk.index');
        // // Route::get('/product_management', [DashboardController::class, 'product_management'])->name('produk');
        // Route::get('/manajemen_produk/tambah_produk', [DashboardController::class, 'tambah_produk'])->name('produk.create');
        // Route::get('/product_management/createProduct', [DashboardController::class, 'createProduct'])->name('tambah_produk');
        // Route::post('/product_management', [ProductController::class, 'store'])->name('produk.store');
        // Route::get('/product_management/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
        // Route::put('/product_management/{id}', [ProductController::class, 'update'])->name('produk.update');
        // Route::delete('/product_management/{id}/delete', [ProductController::class, 'destroy'])->name('produk.delete');

});

Route::middleware('auth')->group(function(){

        Route::prefix('community_management')->controller(DashboardController::class)->group(function() {
                Route::get('/', 'community_management')->name('community.index');     
                Route::get('/createCommunity','createCommunity')->name('community.create');
                Route::post('/storeCommunity', 'storeCommunity')->name('community.store');
                Route::get('/{communityId}/editCommunity', 'editCommunity')->name('community.edit');
                Route::post('/{communityId}/updateCommunity', 'updateCommunity')->name('community.update');
                Route::delete('/{communityId}/deleteCommunity', 'deleteCommunity')->name('community.delete');
        });

        Route::prefix('activity_management')->controller(DashboardController::class)->group(function() {
                Route::get('/', 'activity_management')->name('activity.index');
                Route::get('/createActivity','createActivity')->name('activity.create');
                Route::get('/{activityId}/showActivity','showActivity')->name('activity.show');
                
                Route::post('/storeActivity', 'storeActivity')->name('activity.store');
                Route::get('/{activityId}/editActivity', 'editActivity')->name('activity.edit');
                Route::post('/{activityId}/updateActivity', 'updateActivity')->name('activity.update');
                Route::delete('/{activityId}/deleteActivity', 'deleteActivity')->name('activity.delete');
        });
        
});


// Landing page route
Route::controller(DinamisController::class)->group(function() {
        Route::get('/',  'home')->name('beranda');
        Route::get('/about', 'about')->name('tentang_desa');
        Route::get('/activity', 'activity')->name('kegiatan');
        Route::get('/activity/{activityId}/detail_activity', 'detail_activity')->name('detail_kegiatan');
        Route::get('/community', 'community')->name('lembaga_komunitas');
        Route::get('/product', 'product')->name('produk_desa');
        Route::get('/product/search', 'search')->name('products.search');
        // Route::resource('product', ProductController::class);
});

require __DIR__.'/auth.php';