<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return redirect()->route('login');
    }

    public function login() {
        return view('auth.login', ['title' => 'Login']);
    }

    public function loginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard.admin')
                ->with('message', sweetAlert('Success', 'Berhasil Login!', 'success'));
        } else {
            return redirect()->back()
                ->with('message', sweetAlert('Upss', 'Akun tidak ditemukan!', 'error'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('root')->with('message',
            sweetAlert('Terimakasih', 'Anda telah Keluar.', 'info'));
    }
}
