<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tinhTongController extends Controller
{
    public function index(){
        return view('Sum');
    }
    public function Summ(Request $request){
        $result = $request -> numberA + $request -> numberB;
        return view('sum', compact('result'));
    }
}

?>
