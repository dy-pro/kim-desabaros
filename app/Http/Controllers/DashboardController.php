<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CommunityController;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('layouts.admin.admin');
    }
    public function manajemen_produk(){
        return view('pages.admin.manajemen_produk');
    }
    public function tambah_produk(){
        return view('pages.admin.produk.tambah_produk');
    }
    public function community_management(Request $request){
        //
        $communityController = new CommunityController();

        return $communityController->index($request);
    }
    public function create_community(){
        return view('pages.admin.community.create');
    }

}
