<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'Username wajib diisi',
                'password.required' => 'Password tidak boleh kosong',
            ],
        );
        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->level == 'admin') {
                return redirect('spp');
                $request->session()->regenerate();
            } else if (Auth::user()->level == 'petugas') {
                return redirect('spp');
                $request->session()->regenerate();
            }
        } else {
            return redirect('')
                ->withErrors('Username dan password tidak sesuai')
                ->withInput();
        }
    }

    public function logout()
    {
        if (Auth::guard('petugas')->check()) {
            Auth::guard('petugas')->logout();
        } else if (Auth::guard('siswa')->check()) {
            Auth::guard('siswa')->logout();
        }
        return redirect('');
    }
}
