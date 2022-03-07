<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucSanPham extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $filltable = [
        'category_name','category_slug','category_description','category_status','category_parent'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category'; 
}

