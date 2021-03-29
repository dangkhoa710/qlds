<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;

class GiosinhhoatController extends Controller
{

   public function xuli_giosinhhoat($param)
   {
   		$id = substr($param,2);
   		$laythu = substr($param,0,1); //s hoặc t
   		$laytinhtrang = substr($param,1,1); //1 có hoặc 3 không


   		if($laythu == "s"){
   			DB::table('tbl_giosinhhoat')
   			->where('giosinhhoat_id',$id)
   			->update(['tinhtrang' => $laytinhtrang]);
   			return redirect::to('/dashboard');
   		}

   		else{
   			DB::table('tbl_giosinhhoat')
   			->where('giosinhhoat_id',$id)
   			->update(['tinhtrang' => $laytinhtrang]);
   			return Redirect::to('/dashboard');
   		}

   }
}
