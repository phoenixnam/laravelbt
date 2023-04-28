<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    //
    public function getData(){
        $respon= Http::get('https://api.covid19api.com/summary');
        $data=$respon->json();
        return view('index')->with('data',$data);
    }
}
