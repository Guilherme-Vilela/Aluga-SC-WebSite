<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(Request $request){ 
        // return redirect()->intended(route('home'));
        $crendenciais = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]); 
       
        if (Auth::attempt($crendenciais)) {
            dd("logado");
            $request->session()->regenerate();
            
        }else{
            dd("não logado");
            // return back()->withErrors([
            //     'email' => 'Email ou senha invalidos',
            // ])->onlyInput('email');
        }
        
    }
    public function logout(){   
        Auth::logout();
    }
}   
