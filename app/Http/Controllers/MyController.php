<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Mail\ContactClient;
class MyController extends Controller
{
    public function my_data(){
        return view('test');
    }

    public function receiveData(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        return view('test1', compact('fname', 'lname'));
    }
    public function sendClientMail(){
        $data= Client ::findorFail(1)->toArray();
        $data['theMessage']='My message';
        Mail::to($data['email'])->send(
            new ContactClient($data)
        );
        return "mail sent!";
    }
}

