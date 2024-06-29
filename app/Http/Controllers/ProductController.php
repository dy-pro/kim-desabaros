<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index() {

        $user = Auth::user();
        
        if ($user->role == 'admin') {
            // Admin melihat semua produk
            $products = Product::all();
        } elseif ($user->role == 'penjual') {
            // Penjual hanya melihat produk mereka sendiri
            $products = Product::where('id_user', $user->id)->get();
        } else {
            // Jika pengguna tidak memiliki peran yang sesuai, arahkan kembali ke halaman utama atau tampilkan pesan error
            return redirect()->route('dashboard')->with('error', 'Access Denied');
        }  

        return view('pages.admin.product_management',[
            'products' => $products
        ]);
    }

    public function create(){
        // Ambil semua kategori produk untuk dropdown
        $categories = Category::all();

        return view('pages.admin.produk.createProduct',compact('categories'));
    }

    public function store(Request $request) {

        // dd($request->all());

        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'price' => 'required|integer|min:0',
            'description' => 'nullable|string|max:500',
            'id_category'=> 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ], [
            'name.required' => 'Nama produk harus diisi.',
            'name.max' => 'Nama produk maksimal 255 karakter.',
            'stock.required' => 'Stok produk harus diisi.',
            'stock.integer' => 'Stok produk harus berupa angka.',
            'stock.min' => 'Stok produk minimal 0.',
            'price.required' => 'Harga produk harus diisi.',
            'price.integer' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk minimal 0.',
            'description.max' => 'Keterangan produk maksimal 500 karakter.',
            'id_category.required' => 'Kategori produk harus dipilih.',
            'id_category.exists' => 'Kategori produk tidak valid.',
            'image.mimes' => 'Foto produk harus berupa file berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran file foto produk maksimal 2MB.',
        ]);


        // Menyimpan data produk
        $product = new Product();
        $product->id_user = Auth::user()->id;
        $product->name = $request->name;
        $product->id_category = $request->id_category;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->code = 0;
        // $product->id_user = $request->id_user;

        //Handle foto produk
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName=$image->hashName();
            $image->move('products/', $imageName);
            $product->image =$imageName;
        }

        $product->save();

        return redirect()->route('product.index')->with('success', 'Data Berhasil Disimpan!');
    }


    public function edit($productId){
        
        $product = Product::findOrFail($productId);

        // Ambil semua kategori produk untuk dropdown
        $categories = Category::all();
        
        
        return view('pages.admin.produk.editProduct', [
            'product'=> $product,
            'categories' => $categories
        ]);
    }
    
    public function update(Request $request, $productId){

        // Validasi input data
        $request->validate([
            'name' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'price' => 'required|integer|min:0',
            'description' => 'nullable|string|max:500',
            'id_category' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
        ], [
            'name.required' => 'Nama produk harus diisi.',
            'name.max' => 'Nama produk maksimal 255 karakter.',
            'stock.required' => 'Stok produk harus diisi.',
            'stock.integer' => 'Stok produk harus berupa angka.',
            'stock.min' => 'Stok produk minimal 0.',
            'price.required' => 'Harga produk harus diisi.',
            'price.integer' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk minimal 0.',
            'description.max' => 'Keterangan produk maksimal 500 karakter.',
            'id_category.required' => 'Kategori produk harus dipilih.',
            'id_category.exists' => 'Kategori produk tidak valid.',
            'image.mimes' => 'Foto produk harus berupa file berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran file foto produk maksimal 1MB.',
        ]);

        // $payload = $request->all();

        // Cari produk berdasarkan ID
        $product = Product::find($productId);

        // Cek apakah user yang login adalah pemilik produk atau admin
        if (Auth::user()->role != 'admin' && $product->id_user != Auth::user()->id) {
            return redirect()->route('product.index')->with('error', 'Anda tidak memiliki izin untuk mengubah produk ini.');
        }

        // Menghandle upload file gambar jika ada
        if($request->hasFile('image')){
            // Hapus gambar lama jika ada
            if ($product->image && File::exists(public_path('products/' . $product->image))) {
                File::delete(public_path('products/' . $product->image));
            }
            
            // Simpan gambar baru
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move('products/',$imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->code = 0;
        $product->id_category = $request->id_category;
        // $product->id_user = $request->id_user;

        $product->save();

        return redirect()->route('product.index')->with('success', 'Produk berhasil diupdate.');
    }

    public function destroy($productId){

        // Cari data product berdasarkan ID
        $product = Product::findOrFail($productId);

        // Cek apakah user yang login adalah pemilik produk atau admin
        if (Auth::user()->role != 'admin' && $product->id_user != Auth::user()->id) {
            return redirect()->route('product.index')->with('error', 'Anda tidak memiliki izin untuk menghapus produk ini.');
        }

        // Hapus gambar dari direktori jika ada
        if ($product->image && File::exists(public_path('products/' . $product->image))) {
            File::delete(public_path('products/' . $product->image));
        }

        // Hapus data product
        $product->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus.');
    
    }

}
    
        

