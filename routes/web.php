<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ThuongHieuController;

//frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/danh-muc-con/{slug}', [HomeController::class, 'danhMucCon']);
Route::get('/thuong-hieu/{slug}', [HomeController::class, 'showBrand']);
// Route::get('/danh-muc-cha/{id}', [HomeController::class, 'danhMucCha']);

//backend
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard'])->name('dashboard');
Route::post('/admin-dashboard', [AdminController::class, 'admin_login']);

Route::resource('/danhmuc',DanhMucController::class);
Route::resource('/sanpham',SanPhamController::class);
Route::resource('/thuonghieu',ThuongHieuController::class);