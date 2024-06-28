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
  $payload = $request->all();

  $category=Category::find($id);

  $category->title=$request->title;

  $category->save();

  return redirect()->route('kategori')->with('success', 'Data Berhasil Disimpan!');

}

public function edit($id){
  $category=Category::find($id);
  return view('pages.admin.editCategory', ['category'=>$category]);
}


    public function store(Request $request){
      $payload = $request->all();

      $category=new Category();

      $category->title = $request->title;

      $category->save();
      return redirect()->route('kategori')->with('success', 'Data Berhasil Disimpan!');

    }

    public function show(){
      //
    }

    public function destroy(Request $request, $id){
      $category=Category::find($id);

      $category->delete();

      return redirect()->route('kategori');
      
  }


    
}
