<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class SocialiteController extends Controller
{
    public function redirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback(Request $request)
    {
        
        $user_data = Socialite::driver('google')->stateless()->user();

        $user = User::where('email',$user_data->email)->first();
        if(empty($user->email)){
            var_dump("entrei aqui");
            $user = new User();
            $user->name = $user_data->name;
            $user->password = bcrypt($user_data->id);
            $user->email = $user_data->email;
            $user->save();
        }
            Auth::login($user);
            $request->session()->regenerate();
            session()->put(['mensage' =>['title'=>'Bem vindo '.auth()->user()->name,'text'=> "", 'icon' => "sucess", "function" => "alert"]]);
            return redirect()->route('home');
    }   
}
