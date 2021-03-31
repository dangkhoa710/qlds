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
   public function thongke_diemdanh($thang,$nam,$thu)
   {
      // lấy số ngày sinh hoạt trong 1 tháng bất kì

      $dem_t=0; //biến đếm thứ trong tháng
      if($thu=="8"){
         $lay_nsh = DB::table('tbl_giosinhhoat')->where("thu","Sunday")->where('tinhtrang',1)->get();
      }else{
         $lay_nsh = DB::table('tbl_giosinhhoat')->where("thu","Thursday")->where('tinhtrang',1)->get();
      }

         foreach($lay_nsh as $key => $value){
            $lt = substr($value->ngaysinhhoat,5,2); //03->ép kiểu int là 3
            $ln = substr($value->ngaysinhhoat,0,4);
            if(($lt==$thang)&($ln==$nam))
            {
            $dem_t++;
            }

         }

      //______________
      //lấy số giờ sinh hoạt của trưởng thực tế
      $a = DB::table('tbl_user')->get();
      $tq0=0;
      foreach($a as $key => $dsfs){$tq0++;}
      if($thu=="8"){
      $g = DB::table('tbl_diemdanh')->where('thu','Sunday')->where('diemdanh_level',1)->get();
      }else{
      $g = DB::table('tbl_diemdanh')->where('thu','Thursday')->where('diemdanh_level',1)->get();
      }
      $b = "";
      foreach ($g as $key => $a2) {
         $m = substr($a2->created_at,5,2);//lấy tháng điểm danh
         $y = substr($a2->created_at,0,4); //lấy năm điểm danh
         if(($m==$thang)&($y==$nam)){
            $b = $b.$a2->diemdanh_amount;
         }
      }
      $b2 = explode(",",$b);
      $tq=-1;
      foreach($b2 as $key => $sfsdfsd){$tq++;}
      
      if($dem_t!=0){
      $pt = round(($tq/($dem_t*$tq0)*100),2);}
      else{$pt=0;}

      //------------------------------------
      //lấy số giờ sinh hoạt của đoàn sinh thực tế
      $ds = DB::table("tbl_doansinh")->get();
      $tq00 = 0;
      foreach($ds as $key => $dfssfs){$tq00++;}
      if($thu=="8"){
      $g2 = DB::table('tbl_diemdanh')->where('thu','Sunday')->where('diemdanh_level',0)->get();
      }else{
      $g2 = DB::table('tbl_diemdanh')->where('thu','Thursday')->where('diemdanh_level',0)->get();
      }
      $bds = "";
      
      foreach ($g2 as $key => $a22) {
         $m2 = substr($a2->created_at,5,2);//lấy tháng điểm danh
         $y2 = substr($a2->created_at,0,4); //lấy năm điểm danh
         if(($m2==$thang)&($y2==$nam)){
            $bds = $bds.$a22->diemdanh_amount;
            $tq++;
         }
      }
      $b22 = explode(",",$bds);
      $tq1=-1;
      foreach($b22 as $key => $sssd){$tq1++;}
      if($dem_t!=0){
      $pt2 = round(($tq1/($dem_t*$tq00)*100),2);}
      else{$pt2=0;}
      
      
      return view('diemdanh.thongke_diemdanh')
      ->with('ds',$ds)
      ->with('a',$a)
      ->with('b2',$b2)
      ->with('b22',$b22)
      ->with('thang',$thang)
      ->with('nam',$nam)
      ->with('thu',$thu)
      ->with('pt',$pt)
      ->with('pt2',$pt2)
      ->with('dem_t',$dem_t);
   }
   public function thongke_diemdanh_chitiet_truong($id){
   
      $dem_t5=0; //biến đếm thứ 5 trong tháng

      echo "Tháng 3 -2021 ";

      $lay_nsh5 = DB::table('tbl_giosinhhoat')->where("thu","Thursday")->where('tinhtrang',1)->get();

      foreach($lay_nsh5 as $key => $value){
         $lt = (int)(substr($value->ngaysinhhoat,5,2)); //03->ép kiểu int là 3
         $ln = (int)(substr($value->ngaysinhhoat,0,4));
         if(($lt=="3")&($ln=="2021"))
         {
         $dem_t5++;
         }

      }
      echo "có $dem_t5 buổi sinh hoạt vào thứ năm <br>";

      $dem_t8=0; //biến đếm thứ 5 trong tháng

      echo "Tháng 3 - 2021 ";

      $lay_nsh8 = DB::table('tbl_giosinhhoat')->where("thu","Sunday")->where('tinhtrang',1)->get();

      foreach($lay_nsh8 as $key => $value){
         $lt = (int)(substr($value->ngaysinhhoat,5,2)); //03->ép kiểu int là 3
         $ln = (int)(substr($value->ngaysinhhoat,0,4));
         if(($lt=="3")&($ln=="2021"))
         {
         $dem_t8++;
         }

      }
      echo "có $dem_t8 buổi sinh hoạt vào Chủ nhật<br>";
   }
   public function xuli_thongke_diemdanh(Request $r)
   {
      $t = $r->thang;
      $n = $r->nam;
      $tt= $r->thu;
      return redirect::to("thongke-diemdanh/$t/$n/$tt");
      // echo "$t và $n và $tt";
   }

}
