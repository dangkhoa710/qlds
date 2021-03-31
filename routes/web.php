<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TruongController;
use App\Http\Controllers\DoansinhController;
use App\Http\Controllers\GiokhoaController;
use App\Http\Controllers\NgansachController;
use App\Http\Controllers\TaikhoanController;
use App\Http\Controllers\ThuyenchuyenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiemdanhController;
use App\Http\Controllers\KehoachController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\GiosinhhoatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'index']);
Route::get('/dashboard',[HomeController::class,'dashboard']);

Route::get('xuli-giosinhhoat/{param}',[GiosinhhoatController::class,'xuli_giosinhhoat']);

//Điểm danh có gì vui ?
Route::get('show-diemdanh-ds',[DiemdanhController::class,'show_diemdanh_ds']);
Route::post('diemdanh-ds',[DiemdanhController::class,'diemdanh_ds']);
Route::post('xuli-thongke-diemdanh',[DiemdanhController::class,'xuli_thongke_diemdanh']);
Route::get('thongke-diemdanh/{thang}/{nam}/{thu}',[DiemdanhController::class,'thongke_diemdanh']);
Route::get('thongke-diemdanh-chitiet-truong/{id}',[DiemdanhController::class,'thongke_diemdanh_chitiet_truong']);
Route::get('thongke-diemdanh-chitiet-doansinh/{id}',[DiemdanhController::class,'thongke_diemdanh_chitiet_doansinh']);



//truong có gì nhở ?
Route::get('show-diemdanh-truong',[DiemdanhController::class,'show_diemdanh_truong']);
Route::post('diemdanh-truong',[DiemdanhController::class,'diemdanh_truong']);
Route::get('xem-thongtin-truong',[TruongController::class,'xem_thongtin_truong']);
Route::get('suathongtin-truong/{id}',[TruongController::class,'suathongtin_truong']);
Route::post('capnhat-thongtin-truong',[TruongController::class,'capnhat_thongtin_truong']);
Route::get('xoa-thongtin-truong/{id}',[TruongController::class,'xoa_thongtin_truong']);

//đoàn sinh có gì ?
Route::get('xem-thongtin-ds',[DoansinhController::class,'xem_thongtin_ds']);
Route::get('themthongtin-ds',[DoansinhController::class,'themthongtin_ds']);
Route::post('/luu-thongtin-ds',[DoansinhController::class,'luu_thongtin_ds']);
Route::get('suathongtin-ds',[DoansinhController::class,'suathongtin_ds']);
Route::post('/capnhat-thongtin-ds',[DoansinhController::class,'capnhat_thongtin_ds']);
Route::get('xoa-thongtin-ds',[DoansinhController::class,'xoa_thongtin_ds']);

//giờ khóa phân chia như nào ?
Route::get('show-phanconggiokhoa',[GiokhoaController::class,'show_phanconggiokhoa']);
Route::get('them-phanconggiokhoa',[GiokhoaController::class,'them_phanconggiokhoa']);
Route::post('luu-phanconggiokhoa',[GiokhoaController::class,'luu_phanconggiokhoa']);

Route::get('sua-phanconggiokhoa/{id}',[GiokhoaController::class,'sua_phanconggiokhoa']);
Route::post('capnhat-phanconggiokhoa',[GiokhoaController::class,'capnhat_phanconggiokhoa']);


//kehoach_tintuc

Route::get('thongtin-kehoach',[KehoachController::class,'thongtin_kehoach']);
Route::get('themthongtin-kehoach',[KehoachController::class,'themthongtin_kehoach']);
Route::post('luu-thongtin-kehoach',[KehoachController::class,'luu_thongtin_kehoach']);
Route::get('suathongtin-kehoach',[KehoachController::class,'suathongtin_kehoach']);
Route::post('/capnhat-thongtin-kehoach',[KehoachController::class,'capnhat_thongtin_kehoach']);
Route::get('xoa-thongtin-kehoach',[KehoachController::class,'xoa_thongtin_kehoach']);


Route::get('thongtin-tintuc',[TintucController::class,'thongtin_tintuc']);
Route::get('themthongtin-tintuc',[TintucController::class,'themthongtin_tintuc']);
Route::post('luu-thongtin-tintuc',[TintucController::class,'luu_thongtin_tintuc']);
Route::get('suathongtin-tintuc',[TintucController::class,'suathongtin_tintuc']);
Route::post('capnhat-thongtin-tintuc',[TintucController::class,'capnhat_thongtin_tintuc']);
Route::get('xoa-thongtin-tintuc',[TintucController::class,'xoa_thongtin_tintuc']);

//ngân sách có gì ?

Route::get('show-ngansach',[NgansachController::class,'show_ngansach']);
Route::get('thongke-ngansach',[NgansachController::class,'thongke_ngansach']);

Route::get('thongtin-thu',[NgansachController::class,'thongtin_thu']);

Route::get('themthongtin-thu',[NgansachController::class,'themthongtin_thu']);
Route::post('luu-thongtin-thu',[NgansachController::class,'luu_thongtin_thu']);
Route::get('suathongtin-thu',[NgansachController::class,'suathongtin_thu']);
Route::post('capnhat-thongtin-thu',[NgansachController::class,'capnhat_thongtin_thu']);
Route::get('xoa-thongtin-thu',[NgansachController::class,'xoa_thongtin_thu']);

Route::get('thongtin-chi',[NgansachController::class,'thongtin_chi']);
Route::get('themthongtin-chi',[NgansachController::class,'themthongtin_chi']);
Route::post('luu-thongtin-chi',[NgansachController::class,'luu_thongtin_chi']);
Route::get('suathongtin-chi',[NgansachController::class,'suathongtin_chi']);
Route::post('capnhat-thongtin-chi',[NgansachController::class,'capnhat_thongtin_chi']);
Route::get('xoa-thongtin-chi',[NgansachController::class,'xoa_thongtin_chi']);

//quản lí tài khoản
Route::get('show-taikhoan',[TaikhoanController::class,'show_taikhoan']);

Route::get('show-captaikhoan',[TaikhoanController::class,'show_captaikhoan']);
Route::post('luu-captaikhoan',[TaikhoanController::class,'luu_captaikhoan']);

Route::post('luu-doimatkhaulandau',[HomeController::class,'luu_doimatkhaulandau']);

Route::get('show-login',[HomeController::class,'show_login']);
Route::get('logout',[HomeController::class,'logout']);
Route::post('login-user',[HomeController::class,'login_user']);

//chuyển
Route::get('show-chuyen-ds',[ThuyenchuyenController::class,'show_chuyen_ds']);
Route::post('luu-chuyen-ds/{id}',[ThuyenchuyenController::class,'luu_chuyen_ds']);

Route::get('show-chuyen-truong',[ThuyenchuyenController::class,'show_chuyen_truong']);
Route::post('luu-chuyen-truong/{id}',[ThuyenchuyenController::class,'luu_chuyen_truong']);
Route::post('luu-chuyen-truong2/{id}',[ThuyenchuyenController::class,'luu_chuyen_truong2']);

