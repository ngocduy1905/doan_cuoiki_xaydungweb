<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }
    public function show_dashboard()
    {
        return view('admincp.dashboard');
    }
    public function admin_login(Request $request)
    {
        $data = $request->validate([
            'admin_username' => 'required|max:255',
            'admin_password' => 'required|max:255',
        ]);
        $user_name=$data['admin_username'];
        $pass=md5($data['admin_password']);
        $admin= Admin::where('admin_username',$user_name)->where('admin_password',$pass)->first();
        if($admin){
            return view('admincp.dashboard');
            // $request->session()->put('key',$admin->admin_name );
            //  $request->session()->put('key',$admin->admin_id );
        }else{
             return view('admin_login');
        }


    }
}
