<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    
public function store(Request $request)
{
    $details = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
    ];

    if (Auth::attempt($details)) {
        $role = Auth::user()->role;

        if ($role == 'admin' || $role == 'lecturer' || $role == 'staff') {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        Auth::logout();
        return back()->with('error', 'Only staff can log in.');
    }

    return back()->with('error', 'Wrong email or password.');
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}