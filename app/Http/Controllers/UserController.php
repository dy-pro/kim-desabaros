<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user=User::all();
        return view('pages.admin.user_management', ['users'=>$user]) ;
    }

    public function create(){
        return view('user.createUser');

    }

    public function store(Request $request){
        $payload = $request->all();
        
        $user=new User();

        if($request->hasFile('image')){
            $image = $request->file('image');

            $imageName=$image->hashName();

            $image->move('users/', $imageName);

            $user->image =$imageName;
        } 

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->whatsapp=$request->whatsapp;
        $user->address=$request->address;
        $user->role=$request->role;

        $user->save();

        return redirect()->route('user.index')->with ('success', 'Data Berhasil Disimpan!');
    }

    public function show(){
    
    }

    public function edit($id){
        $user=User::find($id);
        return view('pages.admin.editUser', ['user'=>$user]);
    }

    public function update(Request $request, $id){
        $payload = $request->all();
        $user=User::find($id);

        if($request->hasFile('image')){
            $image = $request->file('image');

            $imageName=$image->hashName();

            $image->move('users/', $imageName);

            $user->image =$imageName;
        } 

        $user->name=$request->name;
        $user->email=$request->email;
        if($request->password != null){
            
            $user->password=$request->password;
        }
        $user->whatsapp=$request->whatsapp;
        $user->address=$request->address;
        $user->role=$request->role;

        $user->save();

        return redirect()->route('user.index');
    }

    public function destroy(Request $request, $id){

        $user=User::find($id);

        $user->delete();

        return redirect()->route('user.index');

    }
}
