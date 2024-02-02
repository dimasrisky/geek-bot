<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // login
    public function login(){
        return view('authentikasi-view.login');
    }

    public function loginHandle(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            if(auth()->user()->role == 'admin'){
                return redirect()->route('main-page-admin');
            }else if(auth()->user()->role == 'customer'){
                return redirect()->route('index');
            }
        }
        return back();
    }

    // register
    public function register(){
        return view('authentikasi-view.register');
    }

    public function registerHandle(Request $request){
        $request->validate([
            'nama' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'noHp' => ['required'],
            'alamat' => ['required'],
        ]);

        User::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Customer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'password' => bcrypt($request->password),
            'email' => $request->email
        ]);

        return redirect()->route('index');
    }

    // logout
    public function logout(){
        auth()->logout();
        return redirect()->route('login-form');
    }
}
