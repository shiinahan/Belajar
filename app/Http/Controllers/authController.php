<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index(){
        return view('Auth.login');
    }
    public function proses_login(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:7',
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email harus berformat email',
            'email.exists' => 'Email tidak terdaftar',

            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password harus lebih dari 7 karakter',
        ]);
        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infoLogin)) {
            return redirect('/pesanan');
        }else {
            return redirect()->back()->withErrors([
                'password'=>'Password salah'
        ]);
        }
    }
        public function logout(){
            Auth::logout();
            return redirect('/login');
        }
    }

