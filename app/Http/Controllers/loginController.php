<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ],[
            'email'=> 'Email wajib diisi',
            'password'=> 'Password wajib diisi',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

       if(Auth::attempt($infologin)){
        if  (Auth::user()->role == 'admin') {
            return redirect('/dashboard');
        } else if (Auth::user()->role == 'superadmin') {
            return redirect('/dashboardsa');
        } else if (Auth::user()->role == 'operator') {
            return redirect('/dashboardop');
        } else if (Auth::user()->role == 'user') {
            return redirect('/dashboarduser');
        }
       }else{
        return redirect('/login')->with('failed','email atau password salah')->withInput();
       }
    }

    function reset(){
        return redirect('/logout');
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }

    function dashadmin(){
        return view('dashboard');
    }

    function dashuser(){
        return view('dashboarduser');
    }

    function dashsuperadmin(){
        return view('pages.superadmin.dashboard');
    }
}
