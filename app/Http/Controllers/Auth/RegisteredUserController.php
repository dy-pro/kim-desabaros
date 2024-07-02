<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;


class RegisteredUserController extends Controller
{
    public function create(): View
{
    return view('auth.register');
}
    public function store(Request $request): RedirectResponse
    {
        // Pesan error khusus
        $message = [
            'name.required' => 'Nama wajib diisi.',
            'name.min' => 'Nama harus terdiri dari minimal 4 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi harus terdiri dari minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak sesuai.'
        ];
    
        // Validasi input dengan pesan error khusus
        $credentials = $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], $message);
    
        // Membuat user baru
        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
        ]);
    
        // Autentikasi user
        Auth::login($user);
    
        // Redirect ke halaman dashboard
        return redirect()->route('login');
    }
}
