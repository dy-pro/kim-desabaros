<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class WithLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()==null){
            return redirect()->route('beranda');
        }
        return $next($request);
    
    }

    public function seller(Request $request, Closure $next){
        if(Auth::user()==null || Auth::user()->role != 'penjual' ){
            return redirect()->route('beranda');
        }
        return $next($request);
    }

    public function admin(Request $request, Closure $next){
        if(Auth::user()==null || Auth::user()->role != 'admin' ){
            return redirect()->route('beranda');
        }
        return $next($request);
    }
    public function postlogin(Request $request)
    {
        $credentials = $request->only('nama', 'password');
    
        if (Auth::attempt(['name' => $credentials['nama'], 'password' => $credentials['password']])) {
            return redirect('/beranda');
        }
    
        $errors = [];
    
        // Check if the username is correct
        $user = \App\Models\User::where('name', $credentials['nama'])->first();
        if (!$user) {
            $errors['nama'] = 'Username not found';
        } else {
            $errors['password'] = 'Incorrect password';
        }
    
        return redirect('/login')
            ->withInput()  // Keep the input values
            ->withErrors($errors);
    }
}
