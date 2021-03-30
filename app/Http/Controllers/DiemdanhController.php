<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;

class DiemdanhController extends Controller
{
   public function show_diemdanh_truong(){  	  

      $show_truong = DB::table('tbl_user')->get();
      
      $lay_thu = Carbon::now('Asia/Ho_Chi_Minh')->format('l');

      $st = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
      $a = DB::table('tbl_diemdanh')->where('created_at',$st)->where('diemdanh_level',"1")->count();
      return view('diemdanh.show_diemdanh_truong')
      ->with('a',$a)
      ->with('show_truong',$show_truong)
      ->with('st',$st)
      ->with('lay_thu',$lay_thu);

   }

   public function diemdanh_truong(Request $r){
      $data = array();
  	
      $j ="";
      $dd=$r->diemdanh;
      foreach ($dd as $key => $value) {
         echo $j=$j.$value.",";
      }
      $data['diemdanh_amount'] = $j;
      $data['diemdanh_describe'] = $r->day;
      $data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
      $data['diemdanh_level']=1;
      DB::table('tbl_diemdanh')->insert($data);
      return redirect::to('show-diemdanh-truong');
   }

   public function show_diemdanh_ds(){
   	
      $layid = session::get('user_id');
      $laynganh = DB::table('tbl_user')->where('user_id',$layid)->first();

      $show_ds = DB::table('tbl_doansinh')->where('doansinh_level',$laynganh->user_area)->get();
      
      $lay_thu = Carbon::now('Asia/Ho_Chi_Minh')->format('l');

      $st = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

      $a = DB::table('tbl_diemdanh')->where('created_at',$st)->where('diemdanh_level',"0")->first();
      


      return view('diemdanh.show_diemdanh_ds')
      ->with('laynganh',$laynganh->user_area)
      ->with('show_ds',$show_ds)
      ->with('st',$st)
      ->with('lay_thu',$lay_thu)
      ->with('a',$a);
   }

   public function diemdanh_ds(Request $r){

      $layid = session::get('user_id');
      $laynganh = DB::table('tbl_user')->where('user_id',$layid)->first();

   	$data = array();
   
      $j ="";
      $dd=$r->diemdanh;
      foreach ($dd as $key => $value) {
         echo $j=$j.$value.",";
      }
      
      $data['diemdanh_describe'] = $r->describe;
      $data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
      $data['diemdanh_level']=0;
      
      
      if($laynganh->user_area=="au"){
      $data['au']=1;
      }
      elseif($laynganh->user_area=="thieu"){
      $data['nghia']=1;
      }
      elseif($laynganh->user_area=="nghia"){
      $data['thieu']=1;
      }
      else{
      $data['hiep']=1;
      }

      $st = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
      $dembanghi=DB::table('tbl_diemdanh')->where('created_at',$st)->where('diemdanh_level',"0")->count();

      if($dembanghi=="0"){  
      $data['diemdanh_amount'] = $j;
      DB::table('tbl_diemdanh')->insert($data);
      return redirect::to('show-diemdanh-ds');}
      else{
      $a = DB::table('tbl_diemdanh')->where('created_at',$st)->where('diemdanh_level',"0")->orderby("diemdanh_id",'desc')->first();
      $data['diemdanh_amount'] =$a->diemdanh_amount.$j;
      DB::table('tbl_diemdanh')->where('created_at',$st)->where('diemdanh_level',"0")->update($data);
      return redirect::to('show-diemdanh-ds');
      }  
   }

}
