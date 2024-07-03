<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Activity;
use App\Models\Category;
use App\Models\Community;
use Illuminate\Http\Request;


class DinamisController extends Controller
{
    public function home(){
        $activities = Activity::paginate(9);

        $product = Product::query()
            ->leftJoin('users', 'products.id_user', '=', 'users.id')
            ->leftJoin('categories', 'products.id_category', '=', 'categories.id')
            ->select('products.image as product_image', 'products.name as product_name', 'products.*', 'users.*', 'categories.title as categories_title', 'categories.*')
            ->get();
    
        $categories = Category::all();
    
        return view('pages.user.dinamis.home', [
            'products' => $product,
            'categories' => $categories,
            'activities' => $activities
        ]);
    }
    public function about(){
        return view('pages.user.dinamis.about');
    }
    public function activity(){
        $activities = Activity::paginate(9);

        return view('pages.user.dinamis.activity', compact('activities'));
    }
    public function detail_activity($activityId){
        $activity= Activity::where('id', $activityId)->first();
        return view('pages.user.dinamis.detail_activity', ['activity'=>$activity]);
    }
    public function community(){
        // Mengambil data pengguna tabel Community
        $communities= Community::all();

        return view('pages.user.dinamis.community', [
            'communities' => $communities
        ]);
    }
    public function product(){
        $product=Product::query()
        ->leftJoin('users', 'products.id_user', '=', 'users.id')
        ->leftJoin('categories', 'products.id_category', '=', 'categories.id')
        ->select('products.image as product_image','products.name as product_name', 'products.*', 'users.*', 'categories.title as categories_title','categories.*')
        ->get();
        $categories=Category::all();
        return view('pages.user.dinamis.product', ['products'=>$product, 'categories' => $categories]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
        $category = $request->input('category');
    
        // Ambil kategori yang ada
        $categories = Category::all();
    
        // Query produk dengan filter pencarian dan kategori
        $query = Product::query()
            ->leftJoin('users', 'products.id_user', '=', 'users.id')
            ->leftJoin('categories', 'products.id_category', '=', 'categories.id')
            ->where('products.name', 'like', '%' . $searchQuery . '%')
            ->select('products.image as product_image', 'products.name as product_name', 'products.*', 'users.*', 'categories.title as categories_title', 'categories.*');
    
        if ($category) {
            $query->where('categories.id', $category);
        }
    
        $products = $query->get();
    
        if ($request->ajax()) {
            return response()->json([
                'html' => view('pages.user.dinamis.partials.search_results', compact('products', 'categories'))->render()
            ]);
        }
    
        return view('pages.user.dinamis.product', compact('products', 'categories'));
    }
}
