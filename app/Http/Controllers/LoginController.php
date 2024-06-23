<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function dologin(Request $request){
        // dd($request->all());
        $customMassage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.exists' => 'Email tidak tidak terdaftar'
        ];

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ],$customMassage);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed', 'Email atau Password Salah !!');
        };
    }

    public function logout(){
        // dd('ok');
        Auth::logout();
        return redirect()->route('landing')->with('success', 'kamu berhasil logout !!');
    }
}
