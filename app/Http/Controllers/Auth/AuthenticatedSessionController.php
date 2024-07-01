<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Validasi bahwa email dan password tidak kosong
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Coba autentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan ke halaman beranda
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // Jika autentikasi gagal, cek apakah user ada dan tentukan pesan kesalahan
        $errors = [];
        $user = \App\Models\User::where('email', $credentials['email'])->first();
        if (!$user) {
            $errors['email'] = 'Email tidak ditemukan';
        } else {
            $errors['password'] = 'Kata sandi salah';
        }

        // Jika data tidak valid atau autentikasi gagal, kembalikan ke halaman login dengan pesan kesalahan
        return redirect()->back()->withErrors($errors)->withInput($request->except('password'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
