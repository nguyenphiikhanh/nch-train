<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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

    public function register(){
        return view('register');
    }

    public function registerUser(RegisterRequest $request){
        try{
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password,
                'email' => $request->email,
            ]);

            return back()->with('success','Register user successfully!');
        }
        catch(\Exception $e){
            Log::error($e->getMessage(). $e->getTraceAsString());
            return back()->with('error','Register user fail!');
        }
    }
}
