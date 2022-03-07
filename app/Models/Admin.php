<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $filltable = [
        'admin_username','admin_password','admin_email','admin_phone','admin_address'
    ];
    protected $primaryKey = 'admin_id';
    protected $table = 'tbl_admin';
    
}
