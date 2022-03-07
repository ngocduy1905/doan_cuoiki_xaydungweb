<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $filltable = [
        'product_name','product_description','product_price','product_status','product_slug','product_img','category_id'
    ];
    protected $primaryKey = 'product_id';
    protected $table = 'tbl_product';

    public function danhmucsanpham()
    {
        return $this->belongsTo('App\Models\DanhMucSanPham','category_id','category_id');
    }public function thuonghieu()
    {
        return $this->belongsTo('App\Models\ThuongHieu','brand_id','brand_id');
    }
}
