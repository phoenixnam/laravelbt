<?php

namespace App\Http\Controllers;

use App\Http\Requests\signupRequest as RequestsSignupRequest;
use Illuminate\Http\Request;
use Input, File;
use Illuminate\Http\Request\signupRequest;

class signupController extends Controller
{
    //
    public function index(){
        return view('signup');
    }
    public function displayInfor(RequestsSignupRequest $Request){
        $user=[
            'name'=>$name=$Request->input('name'),
            'age'=>$age=$Request->input('age'),
            'date'=>$date=$Request->input('date'),
            'phone'=>$phone=$Request->input('phone'),
            'address'=>$address=$Request->input('address'),
        ];
        return view('signup')->with('user',$user);
        
    }
}
