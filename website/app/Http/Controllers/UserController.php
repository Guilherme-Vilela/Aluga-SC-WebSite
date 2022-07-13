<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('User/register_complete',['user'=>$user]);
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            session()->put(['mensage' =>['title'=>'Bem vindo '.auth()->user()->name,'text'=> "", 'icon' => "sucess", "function" => "alert"]]);
            return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'Email ou senha invalidos',
        ])->onlyInput('email');
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->save();
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            session()->put(['mensage' =>['title'=>'Cadastro realizado com sucesso','text'=> "Bem vindo".auth()->user()->name, 'icon' => "success","function" => "alert"]]);
            return redirect()->route('home');
        }
        return back()->withErrors([
            'mensage' => 'Email ou senha invalidos',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function update()
    {
       
    }
}
