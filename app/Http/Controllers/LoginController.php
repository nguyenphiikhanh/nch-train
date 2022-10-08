<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $loginInfo = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($loginInfo)){
            $request->session()->regenerate();

            return redirect()->route('user.index');
        }

        return back()->with('error','Username or password is invalid!');
    }
}
