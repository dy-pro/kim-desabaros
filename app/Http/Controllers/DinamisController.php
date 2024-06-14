<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinamisController extends Controller
{
    public function beranda(){
        return view('dinamis.beranda');
    }
}
