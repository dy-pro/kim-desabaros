<?php

use App\Http\Controllers\DinamisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function (){
        return view('admin.master');
});

Route::resource('product', ProductController::class);

Route::get('/', [DinamisController::class, 'beranda'])->name('beranda');
Route::get('/tentang_desa', [DinamisController::class, 'tentang_desa'])->name('tentang_desa');
Route::get('/kegiatan', [DinamisController::class, 'kegiatan'])->name('kegiatan');
Route::get('/lembaga_komunitas', [DinamisController::class, 'lembaga_komunitas'])->name('lembaga_komunitas');
Route::get('/produk_desa', [DinamisController::class, 'produk_desa'])->name('produk_desa');


