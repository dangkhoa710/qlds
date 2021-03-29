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
      
      $lay_thu = Carbon::now('Asia/Ho_Chi_Minh')->addDays(4)->format('l');

      $st = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
      return view('diemdanh.show_diemdanh_truong')
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
   	# code...
   }

   public function diemdanh_ds(Request $r){
   	# code...
   }

}
