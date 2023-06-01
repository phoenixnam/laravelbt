<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\type_product;
class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->get();
        $sanpham_khuyenmai = Product::where('promotion_price', '<>', 0)->get();

        return view('page.trangchu', compact('slide', 'new_product', 'sanpham_khuyenmai'));
    }
    public function getDetail(Request $request){							
    	$sanpham = Product:: where('id',$request->id)->first();
        $splienquan = Product::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type)->paginate(3);						
        $comments =	Comment::where('id_product',$request->id)->get();					
    	return view('page.chitiet_sanpham',compact('sanpham','splienquan','comments'));						
    }
    public function getLoaiSp(Request $type){							
    	$type_product = type_product:: all();
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac =Product::where('id_type','<>',$type)->paginate(3);
        return view('page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));					
    }
    
}

    

