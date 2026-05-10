<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    // HALAMAN LOGIN
    public function showLogin()
    {
        return view('admin.login');
    }

    // PROSES LOGIN
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($credentials))
        {
            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Email atau Password salah');

    }

    // DASHBOARD
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // LOGOUT
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }

}