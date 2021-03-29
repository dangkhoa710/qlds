<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;

class GiokhoaController extends Controller
{
    public function show_phanconggiokhoa(){
    	

        $show = DB::table('tbl_giokhoa')->join('tbl_user', 'tbl_user.user_id', '=', 'tbl_giokhoa.user_id')->orderby('giokhoa_id','asc')->get();

        $show_gio = DB::table('tbl_giosinhhoat')->orderby('giosinhhoat_id','desc')->get();
        
    	return view('giokhoa.phanconggiokhoa')
    	->with('show',$show)
        ->with('show_gio',$show_gio);
    }
    
    public function them_phanconggiokhoa(){

        $chunhat = DB::table('tbl_giosinhhoat')->where('thu','Sunday')->where('tinhtrang','1')->orderby('giosinhhoat_id','desc')->first();
        $layid = Session::get('user_id');
        $kiemtra_nganh = DB::table('tbl_user')->where('user_id',$layid)->first();
        $laytruong_thuocnganh = DB::table('tbl_user')->get();

    	return view('giokhoa.them-giokhoa')
        ->with('chunhat',$chunhat)
        ->with('kiemtra_nganh',$kiemtra_nganh)
        ->with('laytruong_thuocnganh',$laytruong_thuocnganh);
    }

    public function luu_phanconggiokhoa(Request $r)
    {
    	$data = array();
        $data['giokhoa_ngay'] = $r->ngay;
        $data['giokhoa_gio'] = $r->time1;
        $data['giokhoa_ketthuc'] = $r->time2;
        $data['giokhoa_content'] = $r->content;
        $data['user_id'] = $r->id;
        $data['giokhoa_note'] = $r->note;
        $data['giokhoa_nganh'] = $r->nganh;
        $data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');

        $results = DB::table('tbl_giokhoa')->insert($data);

        if($results){
            // Session::put('message','Thành công !');
            return Redirect::to('show-phanconggiokhoa');
        }
    }

}	
