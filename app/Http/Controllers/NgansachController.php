<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;

class NgansachController extends Controller
{
    public function chuyentien($value)
    {
        $cat_nghin=substr($value,-3);
        $cat_trieu=substr($value,-6,3);
        $cat=0;

        if(strlen($value)=="7"){
            $cat=substr($value,0,1);
        }
        elseif(strlen($value)=="8"){
            $cat=substr($value,0,2);
        }

        $tien = "$cat,$cat_trieu,$cat_nghin";
        return $tien;
    }
    
    public function show_ngansach()
    {
    	$lay_thu = DB::table('tbl_ngansach')->where('ngansach_status','1')->get();
        $tong_lay_thu=0;
        foreach ($lay_thu as $key => $lt) {
            $tong_lay_thu = $tong_lay_thu + $lt->ngansach_amount;
        }

        $lay_chi = DB::table('tbl_ngansach')->where('ngansach_status','0')->get();
        $tong_lay_chi=0;
        foreach ($lay_chi as $key => $lt){
            $tong_lay_chi = $tong_lay_chi + $lt->ngansach_amount;
        }

        $thongke=$tong_lay_thu-$tong_lay_chi;

        $tien = $this->chuyentien($thongke);
        $tlc = $this->chuyentien($tong_lay_chi);
        $tlt = $this->chuyentien($tong_lay_thu);

        return view('ngansach.show_ngansach')
        ->with('tong_lay_chi',$tlc)
        ->with('tong_lay_thu',$tlt)
        ->with('thongke',$tien);
    }
    
    public function thongtin_thu()
    {
    	$show = DB::table('tbl_ngansach')->orderby('ngansach_id')->where('ngansach_status',1)->get();

        return view('ngansach.list_thu')
        ->with('show',$show);
    }

    public function themthongtin_thu()
    {
    	return view('ngansach.themthu');
    }

    public function luu_thongtin_thu(Request $r)
    {
    	$data = array();
        $data['ngansach_describe']=$r->content;
        $data['ngansach_amount']=$r->amount;
        $data['ngansach_status']=1;
        $data['created_at']=Carbon::now('Asia/Ho_Chi_Minh');

        $results=DB::table('tbl_ngansach')->insert($data);
        if($results){
            // Session::put('message','Thành công !');
            return Redirect::to('thongtin-thu');
        }
    }

    public function suathongtin_thu($id)
    {
    	$show = DB::table('tbl_ngansach')->where('ngansach_id',$id)->first();
        return view('ngansach.sua_thu')
        ->with('show',$show);
    }


    public function capnhat_thongtin_thu(Request $r)
    {
    	$results=DB::table('tbl_ngansach')->where('ngansach_id',$r->id)->update(['ngansach_amount'=>$r->amount,'ngansach_describe'=>$r->content]);
        if($results){
            Session::put('message','Thành công !');
            return Redirect::to('thongtin-thu');
        }
    }

    public function xoa_thongtin_thu($id)
    {
    	DB::table('tbl_ngansach')->where('ngansach_id',$id)->delete();
        return redirect::to('thongtin-thu');
    
    }

    public function thongtin_chi()
    {
    	$show = DB::table('tbl_ngansach')->orderby('ngansach_id')->where('ngansach_status',0)->get();

        return view('ngansach.list_chi')
        ->with('show',$show);
    }

    public function themthongtin_chi()
    {
    	return view('ngansach.them_chi');
    }

    public function luu_thongtin_chi(Request $r)
    {
    	$data = array();
        $data['ngansach_describe']=$r->content;
        $data['ngansach_amount']=$r->amount;
        $data['ngansach_status']=0;
        $data['created_at']=Carbon::now('Asia/Ho_Chi_Minh');

        $results=DB::table('tbl_ngansach')->insert($data);
        if($results){
            // Session::put('message','Thành công !');
            return Redirect::to('thongtin-chi');
        }
    }

    public function suathongtin_chi($id)
    {
    	$show = DB::table('tbl_ngansach')->where('ngansach_id',$id)->first();
        return view('ngansach.sua_chi')
        ->with('show',$show);
    }


    public function capnhat_thongtin_chi(Request $r)
    {
    	$results=DB::table('tbl_ngansach')->where('ngansach_id',$r->id)->update(['ngansach_amount'=>$r->amount,'ngansach_describe'=>$r->content]);
        if($results){
            Session::put('message','Thành công !');
            return Redirect::to('thongtin-chi');
        }
    }

    public function xoa_thongtin_chi($id)
    {
    	DB::table('tbl_ngansach')->where('ngansach_id',$id)->delete();
        return redirect::to('thongtin-chi');
    
    }

}
