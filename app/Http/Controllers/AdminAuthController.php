<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    // FORM LOGIN
    public function loginForm()
    {
        return view('admin.login');
    }

    // PROSES LOGIN
    public function login(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($data)) {
            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Email atau password salah!');
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