<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAccountRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        // dump($user);
        // exit();

    }
}
