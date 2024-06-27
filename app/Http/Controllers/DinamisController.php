<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
    public function product(){
        $product=Product::all();
        $category=Category::all();
        return view('pages.user.dinamis.product', ['products'=>$product, 'categories'=>$category]);
    }
}
