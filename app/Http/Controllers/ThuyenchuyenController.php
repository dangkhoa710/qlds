<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;

class ThuyenchuyenController extends Controller
{
    public function show_chuyen_ds()
    {
    	$show = DB::table('tbl_doansinh')->get();
        return view('thuyenchuyen.chuyen_ds')
        ->with('show',$show);
    }
    public function luu_chuyen_ds(Request $r, $id)
    {
    	$nganh = $r->nganh;
        DB::table('tbl_doansinh')->where("doansinh_id",$id)->update(["doansinh_level"=>$nganh]);
        return redirect::to('show-chuyen-ds');
    }
    public function show_chuyen_truong()
    {
        $show = DB::table('tbl_user')->join("tbl_quyen","tbl_quyen.id","=","tbl_user.user_rank")->get();
        $show_quyen = DB::table('tbl_quyen')->get();
    	return view('thuyenchuyen.chuyen_truong')
        ->with('show_quyen',$show_quyen)
        ->with('show',$show);
    }
    public function luu_chuyen_truong(Request $r,$id)
    {
    	$nganh = $r->nganh;
        DB::table('tbl_user')->where("user_id",$id)->update(["user_area"=>$nganh]);
        return redirect::to('show-chuyen-truong');
    }
    public function luu_chuyen_truong2(Request $r,$id)
    {
        $cv = $r->cv;
        DB::table('tbl_user')->where("user_id",$id)->update(["user_rank"=>$cv]);
        return redirect::to('show-chuyen-truong');
    }
}
