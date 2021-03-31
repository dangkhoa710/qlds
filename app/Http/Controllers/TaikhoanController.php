<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;
class TaikhoanController extends Controller
{
    public function show_taikhoan()
    {
    		$show = DB::table('tbl_user')->join('tbl_quyen','tbl_quyen.id','=','tbl_user.user_permision')->get();
        return view('taikhoan.list_taikhoan')
        ->with('show',$show);    
   	}

   	public function show_captaikhoan()
   	{
   	    $show_quyen = DB::table('tbl_quyen')->get();
        return view('taikhoan.cap_taikhoan')
        ->with('show_quyen',$show_quyen);
   	}

   	public function luu_captaikhoan(Request $r)
   	{
   		 $dt = array();
       $dt['user_name']=$r->content;
       $dt['user_password']=1;
       $dt['user_level']=1;
       $dt['user_rank']=$r->quyen;
       $dt['user_permision']=$r->quyen;
       $dt['created_at']= Carbon::now('Asia/Ho_Chi_Minh');

       $results=DB::table('tbl_user')->insert($dt);
       if($results){
            Session::put('message','Thành công !');
            return Redirect::to('show-captaikhoan');
        }

   	}

}
