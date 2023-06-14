<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;

class LoginController extends Controller
{
    //
    public function getAccount(){
        $user= account::all();
        return response()->json($user);
    }
}
