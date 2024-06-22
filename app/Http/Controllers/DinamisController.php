<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinamisController extends Controller
{
    public function beranda(){
        return view('pages.user.dinamis.beranda');
    }
    public function tentang_desa(){
        return view('pages.user.dinamis.tentang_desa');
    }
    public function kegiatan(){
        return view('pages.user.dinamis.kegiatan');
    }
    public function lembaga_komunitas(){
        return view('pages.user.dinamis.lembaga_komunitas');
    }
    public function produk_desa(){
        return view('pages.user.dinamis.produk_desa');
    }
}
