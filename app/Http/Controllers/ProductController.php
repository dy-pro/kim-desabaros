<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        return view('admin.master');
    }

    public function destroy(){
        
    }



    public function  create(){
        return view('product');
    }

    public function store(Request $request)
    {

        // Validasi input form
    $request->validate([
        'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        'title' => 'required|min:5',
        'description' => 'required|min:10',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
    ]);

     // Upload 
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

     // Simpan data produk ke db
        Product::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

    return redirect()->route('products.index')->with('success', 'Data Berhasil Disimpan!');
}

    }
    
        

