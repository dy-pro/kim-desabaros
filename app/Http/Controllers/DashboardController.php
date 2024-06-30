<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommunityController;
use App\Models\Community;

class DashboardController extends Controller
{
    public function dashboard(){
        // dd(Auth::user()->role);
        if(Auth::user()==null || Auth::user()->role == 'penjual' ){
            return redirect()->route('product.index');
        }
        $user = User::where('role' ,'=', 'penjual')->count();
        $product = Product::count();
        $category = Category::count();
        $community = Community::count();
        $activity = Activity::count();
        return view('pages.admin.dashboard');
    }

    //User
    public function user_management(){
        $user = User::all();
        return view('pages.admin.user_management', ['users'=>$user]);
    }

    public function createUser(){
        return view('pages.admin.createUser');
    }

    //Kategori Produk
    public function category_management(){
        $categories = Category::all();
        return view('pages.admin.category_management', ['categories'=> $categories]);
    }
    public function createCategory(){
        return view('pages.admin.createCategory');
    }

    //Produk
    public function product_management(Request $request){
        // $products = Product::query()
        // ->leftJoin('category', 'products.id_category', '=', 'category.id')
        // ->select('products.*','category.title')
        // ->get();
        // return view('pages.admin.product_management', ['products'=>$products]);

        $productController = new ProductController();
        return $productController->index($request);

    }
    public function createProduct(Request $request){
        $productController = new ProductController();
        return $productController->create($request);
    }

    public function storeProduct(Request $request){
        $productController = new ProductController();
        return $productController->store($request);
    }

    public function editProduct($productId){
        $productController = new ProductController();
        return $productController->edit($productId);
    }

    public function updateProduct(Request $request, $productId){
        $productController = new ProductController();
        return $productController->update($request, $productId);
    }

    public function deleteProduct($productId){
        $productController = new ProductController();
        return $productController->destroy($productId);
    }

    //Komunitas
    public function community_management(Request $request){
        $communityController = new CommunityController();
        return $communityController->index($request);
    }

    public function createCommunity(Request $request){;
        $communityController = new CommunityController();
        return $communityController->create($request);
    }

    public function storeCommunity(Request $request){
        $communityController = new CommunityController();
        return $communityController->store($request);
    }

    public function editCommunity($communityId) {
        $communityController = new CommunityController();
        return $communityController->edit($communityId);
    }
    
    public function updateCommunity(Request $request, $communityId) {
        $communityController = new CommunityController();
        return $communityController->update($request, $communityId);
    }

    public function deleteCommunity($communityId) {
        $communityController = new CommunityController();   
        return $communityController->destroy($communityId);
    }

    //Kegiatan
    public function activity_management(Request $request){
        $activityController = new ActivityController();
        return $activityController->index($request);
    }

    public function createActivity(Request $request){
        $activityController = new ActivityController();
        return $activityController->create($request);
    }

    public function storeActivity(Request $request){
        $activityController = new ActivityController();
        return $activityController->store($request);
    }

    public function editActivity($activityId){
        $activityController = new ActivityController();
        return $activityController->edit($activityId);
    }

    public function updateActivity(Request $request, $activityId) {
        $activityController = new ActivityController();
        return $activityController->update($request, $activityId);
    }

    public function deleteActivity($activityId) {
        $activityController = new ActivityController();   
        return $activityController->destroy($activityId);
    }
}
