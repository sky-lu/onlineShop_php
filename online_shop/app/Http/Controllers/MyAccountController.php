<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAccountRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    function index(){
        return view('myAccount');
    }
    function signup(CreateAccountRequest $request){
       
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->ip = $request->ip();
        $user->password = Hash :: make($request->password);
        
        $user->save();
        

    }

    function login(LoginRequest $request){
        $credentials = $request->only('email', 'password');
        

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $email = $request->input('email');
            $user = User::where('email', $email)->first();
            $request->session()->put('user', $user);

            //1. Get email from form
            //2. select user data through ORM from database via email of last step except secret information
            //3. Put userinfo of last step into session 
            
            return redirect('about'); 
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
       
        
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('myaccount'); 
    }
}
