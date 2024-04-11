<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\MyUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumConnection extends Controller
{
    public function authenticate(Request $request, User $user){
       // dd($request);
        // $formFields = $request->validate([
        //     'login' => 'required',
        //     'password' => 'required'
        // ]);

        // if(auth()->attempt($formFields))
        // {
        //     $request->session()->regenerate();
        //     return view('home');
        // }
        // return view('/home');

        $name  = $request->input('login');
        $password = $request->input('password');

        $login = Message::getUser($name, $password);

        if(is_null($login)){
            echo "No login on this name !!!" ;
        }else{
            return view('/home');
        }
    }
}
