<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;

class TruongController extends Controller
{
    public function xem_thongtin_truong()
    {
    	$show = DB::table('tbl_user')->orderby('user_id','asc')->get();
    	return view('user.xemthongtin_all')
    	->with('show',$show);
    }
}
