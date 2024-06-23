<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function destroy(Request $request, $id){
        $product=Product::find($id);

        $product->delete();

        return redirect();
        
    }


    public function  create(){
        return view('product.createProduct');
    }

    public function store(Request $request)
    {

        // dd($request->all());
    //     // Validasi input form
    // $request->validate([
    //     'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
    //     'title' => 'required|min:5',
    //     'description' => 'required|min:10',
    //     'price' => 'required|numeric',
    //     'stock' => 'required|numeric',
    //     'category'=> 'required'
    // ]);

     // Upload 
        $payload = $request->all();

        $product=new Product();

        if($request->hasFile('image')){
        $image = $request->file('image');
        $imageName=$image->hashName();
        $image->move('products/'. $imageName);
    }
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description =$request->description;
        $product->stock = $request->stock;
        $product->image =$imageName;
        $product->code = $request->code;
        
        // dd($product);

        $product->save();

     // Simpan data produk ke db
        // Product::create([
        //     'image' => $image->hashName(),
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'stock' => $request->stock,
        //     'code' => rand(10000000, 99999999)
        // ]);

    return redirect()->route('product.index')->with('success', 'Data Berhasil Disimpan!');
}


    }
    
        

