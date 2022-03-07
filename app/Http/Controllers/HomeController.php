<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMucSanPham;
use App\Models\ThuongHieu;
use App\Models\SanPham;

class HomeController extends Controller
{
    public function index()
    {
        $danhmuc = DanhMucSanPham::orderBy('category_id','DESC')->get();
        $thuonghieu = ThuongHieu::orderBy('brand_id','DESC')->get();
        $sanphammoi = SanPham::orderBy('product_id','DESC')->take(10)->get();
        $sanphamnoibat = SanPham::all()->random(3);
        return view('pages.home')->with(compact('danhmuc','sanphammoi','sanphamnoibat','thuonghieu'));
    }
    public function danhMucCon($slug)
    {

        $danhmuc = DanhMucSanPham::orderBy('category_id','DESC')->get();
        $danhmuc_id = DanhMucSanPham::where('category_slug',$slug)->first();
        $sanpham = SanPham::orderBy('product_id','DESC')->where('category_id',$danhmuc_id->category_id)->get();
        return view('pages.category.category')->with(compact('danhmuc','sanpham','danhmuc_id'));
    }
    public function showBrand($slug)
    {
        $danhmuc = DanhMucSanPham::orderBy('category_id','DESC')->get();
        $brand_id = ThuongHieu::where('brand_slug',$slug)->first();
        $sanpham = SanPham::orderBy('product_id','DESC')->where('brand_id',$brand_id->brand_id)->get();
        return view('pages.brand.brand')->with(compact('danhmuc','sanpham','brand_id'));
    }
    // public function danhMucCha($id)
    // {
    //     $danhmuc = DanhMucSanPham::orderBy('category_id','DESC')->get();
    //     $danhmuc_parent = DanhMucSanPham::where('category_id',$id)->first();
    //     $danhmuc_child = DanhMucSanPham::where('category_parent',$danhmuc_parent->category_parent)->get();
    //     $sanpham = SanPham::orderBy('product_id','DESC')->where('category_id',$danhmuc_child->category_id)->get();
    //     return view('pages.category.category_parent')->with(compact('danhmuc','sanpham','danhmuc_parent'));
    // }
}
