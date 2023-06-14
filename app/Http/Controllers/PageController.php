<?php

namespace App\Http\Controllers;

use App\Models\slide;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\bill_detail;
use App\Models\type_product;
class PageController extends Controller
{
    public function getIndex()
    {
        $slide = slide::all();
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
    public function getIndexAdmin()
    {
        $products = Product::all();
        return view('pageadmin.admin')->with(['product' => $products, 'sumSold' => count(bill_detail::all())]);
    }

    public function getAdminAdd()
    {
        return view('pageadmin.formAdd');
    }
    public function postAdminAdd(Request $request)
    {
        $product = new Product();
        if ($request->hasFile('inputImage')) {
            $file = $request->file('inputImage');
            $fileName = $file->getClientOriginalName('inputImage');
            $file->move('source/image/product', $fileName);
        }
        $file_name = null;
        if ($request->file('inputImage') != null) {
            $file_name = $request->file('inputImage')->getClientOriginalName();
        }

        $product->name = $request->inputName;
        $product->image = $file_name;
        $product->description = $request->inputDescription;
        $product->unit_price = $request->inputPrice;
        $product->promotion_price = $request->inputPromotionPrice;
        $product->unit = $request->inputUnit;
        $product->new = $request->inputNew;
        $product->id_type = $request->inputType;
        $product->save();
        return redirect ('/admin');
    }

    public function getAdminEdit($id)
    {
        $product = Product::find($id);
        return view('pageadmin.formEdit')->with('product', $product);
    }

    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;
        $product =  Product::find($id);
        if ($request->hasFile('editImage')) {
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName('editImage');
            $file->move('source/image/product', $fileName);
        }
        if ($request->file('editImage') != null) {
            $product->image =$fileName;
        }

        $product->name = $request->editName;
        $product->description = $request->editDescription;
        $product->unit_price = $request->editPrice;
        $product->promotion_price = $request->editPromotionPrice;
        $product->unit = $request->editUnit;
        $product->new = $request->editNew;
        $product->id_type = $request->editType;
        $product->save();
        return redirect ('/admin');
    }
    public function postAdminDelete($id)
    {
      $product = product::find($id);
      $product->delete();
      return $this->getIndexAdmin();  
    }
    public function getAddToCart(Request $req, $id)
    {
        if (Session::has('user')) {
            $products = products::find($id);
            if ($products) {
                $oldCart = session('cart') ? session('cart') : null;
                $cart = new Cart($oldCart);
                $cart->add($products, $id);
                $req->session()->put('cart', $cart);
                return redirect()->back();
            } else {
                return '<script>alert("Không tìm thấy sản phẩm này.");window.location.assign("/");</script>';
            }
        } else {
            return '<script>alert("Vui lòng đăng nhập để sử dụng chức năng này.");window.location.assign("/login");</script>';
        }
    }

    
}

    

