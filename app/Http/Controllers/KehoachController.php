<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;

class KehoachController extends Controller
{
	public function thongtin_kehoach()
	{
		$show = DB::table('tbl_kehoach')
		->join('tbl_user','tbl_user.user_id','=','tbl_kehoach.id')
		->orderby('kehoach_id','desc')
		->get();
		return view('kehoachtintuc.list_kehoach')
		->with('show',$show);
	}

	public function themthongtin_kehoach()
	{
		$idt = DB::table('tbl_user')->get();
		return view('kehoachtintuc.them_kehoach')
		->with('idt',$idt);
	}

	public function luu_thongtin_kehoach(Request $r)
	{
		$data = array();
		$data['kehoach_describe'] = $r->describe;
		$data['kehoach_time'] = $r->daystart;
		$data['id'] = $r->tid;
		$data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh'); 

		$results=DB::table('tbl_kehoach')->insert($data);
        if($results){
            // Session::put('message','Thành công !');
            return Redirect::to('thongtin-kehoach');
        }
	}

	public function suathongtin_kehoach()
	{
		# code...
	}

	public function capnhat_thongtin_kehoach(Request $r)
	{
		# code...
	}

	public function xoa_thongtin_kehoach()
	{
		# code...
	}
}
