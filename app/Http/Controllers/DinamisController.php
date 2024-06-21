<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinamisController extends Controller
{
    public function beranda(){
        return view('dinamis.beranda');
    }
    public function tentang_desa(){
        return view('dinamis.tentang_desa');
    }
    public function kegiatan(){
        return view('dinamis.kegiatan');
    }
    public function lembaga_komunitas(){
        return view('dinamis.lembaga_komunitas');
    }
    public function produk_desa(){
        return view('dinamis.product');
    }
}
