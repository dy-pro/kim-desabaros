<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DinamisController extends Controller
{
    public function home(){
        return view('pages.user.dinamis.home');
    }
    public function about(){
        return view('pages.user.dinamis.about');
    }
    public function activity(){
        return view('pages.user.dinamis.activity');
    }
    public function detail_activity(){
        return view('pages.user.dinamis.detail_activity');
    }
    public function community(){
        return view('pages.user.dinamis.community');
    }
    public function product()
    {
        $product = Product::all(); // Ambil semua produk dari database
        return view('pages.user.dinamis.product', ['product' => $product]); // Teruskan produk ke view
    }
}
