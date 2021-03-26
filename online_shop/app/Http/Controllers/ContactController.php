<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use App\Models\Feedback;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    //
    function index(){
        return view('contact');
    }

    function addFeedback(ContactUsRequest $request){
        // $validatedData = $request->validate([
        //     'name' => ['required', 'max:50', 'alpha'],
        //     'email' => ['required', 'max:200', 'email:rfc,dns'],
        //     'subject' => ['required', 'max:200'],
        //     'message' => ['required', 'max:1000'],

        // ]);
        //$validatedData = $request->validated();
        $feedback = new Feedback;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        $feedback->ip = $request->ip();
        $feedback->save();
        // dump($feedback);
        // exit();
    }
}
