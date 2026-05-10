<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Halaman Login
    public function login()
    {
        return view('admin.login');
    }

    // Proses Login
    public function loginProses(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // Username & Password sederhana
        if ($username == 'admin' && $password == '12345') {

            // Simpan session login
            session([
                'admin_login' => true
            ]);

            return redirect('/admin/dashboard');
        }

        return redirect('/admin/login')
            ->with('error', 'Username atau Password salah');
    }

    // Dashboard
    public function dashboard()
    {
        // Cek login
        if (!session('admin_login')) {
            return redirect('/admin/login');
        }

        return view('admin.dashboard');
    }

    // Logout
    public function logout()
    {
        // Hapus session
        session()->forget('admin_login');

        // Redirect ke login
        return redirect('/admin/login');
    }
}