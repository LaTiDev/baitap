<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class UserController extends Controller
{
    //login
    public function login() {
        return view('fe.login');
    }
    public function postLogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->route('index');
        }

        return redirect()->back()->with('error', 'Sai email hoặc pass nè');
    }

    //register
    public function register() {
        return view('fe.register');
    }
    public function postRegister(Request $req) {
        $req->merge(['password' => Hash::make($req->password)]);
        try {
            User::create($req->all());
        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect()->route('login')->with('success','Register successfully');
    }

    //logout
    public function logout(Request $req)
    {
        Auth::logout();

        return redirect()->back();
    }
}
