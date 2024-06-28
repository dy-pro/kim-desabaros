<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\CommunityController;
use App\Models\Activity;

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
