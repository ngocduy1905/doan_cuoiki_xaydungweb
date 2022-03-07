<?php

namespace App\Http\Controllers;
use App\Models\ThuongHieu;
use Illuminate\Http\Request;

class ThuongHieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.thuonghieu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
            'brand_name' => 'required|unique:tbl_brand|max:255',
            'brand_slug' => 'required|unique:tbl_brand|max:255',
            'brand_desc' => 'required|max:255',
            'brand_status' => 'required',
            ],
            [
                'brand_name.unique' => 'Tên danh mục đã có xin điền tên khác',
                'brand_slug.unique' => 'Slug danh mục đã có xin điền tên khác',
                'brand_name.required' => 'Tên danh mục phải có',
                'brand_slug.required' => 'Slug danh mục phải có',
                'brand_desc.required' => 'Mô tả phải có',
                
            ]
        );
        $thuonghieu = new ThuongHieu();

        $thuonghieu->brand_name = $data['brand_name'];
        $thuonghieu->brand_slug = $data['brand_slug'];
        $thuonghieu->brand_description = $data['brand_desc'];
        $thuonghieu->brand_status = $data['brand_status'];

        $thuonghieu->save();

        return redirect()->back()->with('message','Thêm thương hiệu thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
