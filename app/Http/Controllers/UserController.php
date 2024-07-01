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

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'whatsapp' => 'required|string|max:15',
            'address' => 'nullable|string|max:255',
            'role' => 'required|string|in:admin,user',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ], [
            'name.required' => 'Nama harus diisi.',
            'name.max' => 'Nama maksimal 255 karakter.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 6 karakter.',
            'whatsapp.required' => 'Whatsapp harus diisi',
            'whatsapp.max' => 'Nomor WhatsApp maksimal 15 karakter.',
            'address.max' => 'Alamat maksimal 255 karakter.',
            'role.required' => 'Role harus dipilih.',
            'role.in' => 'Role tidak valid.',
            'image.mimes' => 'Foto harus berupa file berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran file foto maksimal 2MB.',
        ]);

        // $payload = $request->all();
        
        $user = new User();

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
        // $payload = $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'whatsapp' => 'required|string|max:15',
            'address' => 'nullable|string|max:255',
            'role' => 'required|string|in:admin,user',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ], [
            'name.required' => 'Nama harus diisi.',
            'name.max' => 'Nama maksimal 255 karakter.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'whatsapp.required' => 'Whatsapp harus diisi',
            'whatsapp.max' => 'Nomor WhatsApp maksimal 15 karakter.',
            'address.max' => 'Alamat maksimal 255 karakter.',
            'role.required' => 'Role harus dipilih.',
            'role.in' => 'Role tidak valid.',
            'image.mimes' => 'Foto harus berupa file berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran file foto maksimal 2MB.',
        ]);

        $user = User::find($id);

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

        return redirect()->route('user.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Request $request, $id){

        $user=User::find($id);

        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus.');

    }
}
