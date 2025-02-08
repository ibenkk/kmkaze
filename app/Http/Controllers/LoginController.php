<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
return view ('Frontend.Login');
    }

    public function store(Request $request){

        $credentials=$request->validate([          'email'=>'required','|email:dns',
        'password'=>"required"]);

         if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/dashboardadmin');
         }

         // jika salah
         // with dengan pesan
         return redirect('/login')->with("failed","Login Tidak Berhasil!");
    }
}
