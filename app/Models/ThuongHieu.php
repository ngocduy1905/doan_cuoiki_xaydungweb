<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $filltable = [
        'brand_name','brand_slug','brand_description','brand_status'
    ];
    protected $primaryKey = 'brand_id';
    protected $table = 'tbl_brand'; 
}
