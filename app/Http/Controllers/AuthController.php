<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    
    public function authentication(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            //$request->session()->regenerate();
            if(Auth::user()->role_id==1){
               return redirect('dashboard');
            } else {
                return redirect('home');
            }
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'Username dan Password Salah');
        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
