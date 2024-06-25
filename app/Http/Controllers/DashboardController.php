<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('pages.admin.dashboard');
    }
    public function product_management(){
        $products = Product::all();
        return view('pages.admin.product_management', ['products'=>$products]);
    }
    public function createProduct(){
        return view('pages.admin.produk.createProduct');
    }
    public function user_management(){
        $user = User::all();
        return view('pages.admin.user_management', ['users'=>$user]);
    }
    public function createUser(){
        return view('pages.admin.createUser');
    }
    public function category_management(){
        return view('pages.admin.category_management');
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
