<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
