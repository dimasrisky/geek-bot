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

        // if(auth()->attempt(['nama' => $request->nama, 'password' => $request->password])){

        // }else if(auth()->guard('customers')->attempt(['nama' => $request->nama, 'password' => $request->password])){

        // }
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
