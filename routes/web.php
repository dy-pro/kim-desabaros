<?php

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


Route::get('/', function () {
    return view('dinamis.beranda');
});

require __DIR__.'/auth.php';
