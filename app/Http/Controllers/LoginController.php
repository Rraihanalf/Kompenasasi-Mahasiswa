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
    function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Username wajib diisi',
            'password.required'=>'password wajib diisi',
        ]);

        $infologin = [
            'username'=>$request->username,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role=='admin'){
                return redirect('admin');
            }elseif(Auth::user()->role=='pengawas'){
                return redirect('pengawas');
            }elseif(Auth::user()->role=='mahasiswa'){
                return redirect('siswa');
        }
    }else{
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
