<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function destroy(Request $request, $id){
        $product=Product::find($id);

        $product->delete();

        return redirect()->route('produk.index');
        
    }


    public function edit($id){
        $product=Product::find($id);
        return view('pages.admin.produk.editProduct', ['product'=>$product]);
    }


    public function  create(){
        $category=Category::all();
        return view('produk.createProduct', ['categories'=>$category]);
    }

    public function update(Request $request, $id){
        $payload = $request->all();

        $product=Product::find($id);

        if($request->hasFile('image')){
        $image = $request->file('image');
        $imageName=$image->hashName();
        // dd($imageName->extension());
        $image->move('products/', $imageName);
        $product->image =$imageName;
    }
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description =$request->description;
        $product->stock = $request->stock;
        $product->code = 0;
        $product->id_user = $request->id_user;
        $product->id_category = $request->id_category;
        
        // dd($product);

        $product->save();

        return redirect()->route('produk.index')->with('success', 'Data Berhasil Disimpan!');
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
        // dd($imageName->extension());
        $image->move('products/', $imageName);
        $product->image =$imageName;
    }
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description =$request->description;
        $product->stock = $request->stock;
        $product->id_category = $request->id_category;
        $product->code = 0;
        $product->id_user = $request->id_user;
        
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





    return redirect()->route('produk.index')->with('success', 'Data Berhasil Disimpan!');
}


    }
    
        

