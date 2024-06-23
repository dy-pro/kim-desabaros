<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user=User::all();
        return ;
    }

    public function create(){
        return;
    }

    public function store(Request $request){
        $user=new User();

        $payload = $request->all();

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->whatsapp=$request->whatsapp;
        $user->address=$request->address;
        $user->role=$request->role;

        $user->save();

        return redirect();
    }

    public function edit(){
        
    }

    public function update(Request $request, $id){
        $user=User::find($id);
        $payload = $request->all();

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->whatsapp=$request->whatsapp;
        $user->address=$request->address;
        $user->role=$request->role;

        $user->save();

        return redirect();
    }

    public function destroy(Request $request, $id){
        $user=User::find($id);

        $user->delete();

        return redirect();

    }
}
