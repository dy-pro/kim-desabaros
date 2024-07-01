<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function  create(){
    return view('pages.admin.createCategory');
  }

  public function update (Request $request, $id){
    // $payload = $request->all();
    $request->validate([
      'title' => 'required|string|max:255',
    ], [
        'title.required' => 'Kategori produk harus diisi.',
        'title.max' => 'Kategori produk maksimal 255 karakter.',
    ]);

    $category = Category::find($id);

    $category->title=$request->title;

    $category->save();

    return redirect()->route('kategori')->with('success', 'Data Berhasil Diupdate');

  }

  public function edit($id){
    $category=Category::find($id);
    return view('pages.admin.editCategory', ['category'=>$category]);
  }


  public function store(Request $request){
    // $payload = $request->all();
    $request->validate([
      'title' => 'required|string|max:255',
    ], [
        'title.required' => 'Kategori produk harus diisi.',
        'title.max' => 'Kategori produk maksimal 255 karakter.',
    ]);

    $category=new Category();

    $category->title = $request->title;

    $category->save();
    return redirect()->route('kategori')->with('success', 'Data Berhasil Disimpan!');

  }

  public function show(){
    //
  }

  public function destroy($id){
    $category = Category::findOrFail($id);

    $category->delete();

    return redirect()->route('kategori')->with('success', 'Kategori produk berhasil dihapus.');
      
  }
}
