<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('pages.admin.dashboard');
    }
    public function product_management(){
        $products = Product::query()
        ->leftJoin('category', 'products.id_category', '=', 'category.id')
        ->select('products.id as id_product', 'products.*','category.*')
        ->get();
        return view('pages.admin.product_management', ['products'=>$products]);
    }
    public function createProduct(){
        $category= Category::all();
        return view('pages.admin.produk.createProduct', ['categories'=>$category]);
    }
    public function user_management(){
        $user = User::all();
        return view('pages.admin.user_management', ['users'=>$user]);
    }
    public function createUser(){
        return view('pages.admin.createUser');
    }
    public function category_management(){
        $category = Category::all();
        return view('pages.admin.category_management', ['categories'=>$category]);
    }
    public function createCategory(){
        return view('pages.admin.createCategory');
    }
    public function activity_management(){
        return view('pages.admin.activity_management');
    }
    public function createActivity(){
        return view('pages.admin.createActivity');
    }
    public function community_management(){
        return view('pages.admin.community_management');
    }

}
