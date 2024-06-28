<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DinamisController extends Controller
{
    public function home(){
        $product=Product::query()
        
        
        ->leftJoin('users', 'products.id_user', '=', 'users.id')
        ->leftJoin('category', 'products.id_category', '=', 'category.id')
        ->select('products.image as product_image','products.name as product_name', 'products.*', 'users.*', 'category.title as category_title','category.*')
        ->get();
        $category=Category::all();
        return view('pages.user.dinamis.home', ['products'=>$product, 'categories' => $category]);
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
        $product=Product::query()
        
        
        ->leftJoin('users', 'products.id_user', '=', 'users.id')
        ->leftJoin('category', 'products.id_category', '=', 'category.id')
        ->select('products.image as product_image','products.name as product_name', 'products.*', 'users.*', 'category.title as category_title','category.*')
        ->get();
        $category=Category::all();
        return view('pages.user.dinamis.product', ['products'=>$product, 'categories' => $category]);
    }
}
