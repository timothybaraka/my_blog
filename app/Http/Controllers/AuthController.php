<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{   
    //Register
    public function register(Request $request){
        //Validate
        $fields = $request -> validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email','unique:users'],
            'password' => ['required','min:3','confirmed']
        ]);
        
        //Register
        $user = User::create($fields);
        
        //Login
        Auth::login($user);

        //Redirect
        return redirect()->route('home');
        
    }
    //Login user
    public function login(Request $request){
        //Validate
        $fields = $request -> validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required']
        ]);
        //dd($request);
        //Try to login in user
        if(Auth::attempt($fields,$request->remember)){
            return redirect() -> intended();
        }else{
            return back() -> withErrors([
                'failed' => 'The provided credentials do not match our records.'
            ]); 
        }
    }
    //Logout user
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');



    }
}
