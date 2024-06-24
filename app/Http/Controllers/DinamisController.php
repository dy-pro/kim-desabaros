<?php

namespace App\Http\Controllers;

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
    public function community(){
        return view('pages.user.dinamis.community');
    }
    public function product(){
        return view('pages.user.dinamis.product');
    }
}
