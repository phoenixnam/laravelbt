<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class baith extends Controller
{
    //
    public function xinchao(){
        $title="Đây là sinh viên!";
        $name ="Lan Anh";
        $arr =['name'=>$name, 'tieude'=>$title];
        return view('test') -> with('student', $arr);
    }
}
