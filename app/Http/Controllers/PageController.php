<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->get();
        $sanpham_khuyenmai = Product::where('promotion_price', '<>', 0)->get();

        return view('page.trangchu', compact('slide', 'new_product', 'sanpham_khuyenmai'));
    }
    public function getDetail(Request $REQUEST){
        $sanpham = Product::where('id', $REQUEST->id)->first();
        $splienquan=Product::where('id','<>',$sanpham->id)->get();
        $comments=Product::where('id_product', $REQUEST->id)->get();
        return view('page.chitiet_sanpham', compact('sanpham','splienquan','comments'));
    }
}

    

