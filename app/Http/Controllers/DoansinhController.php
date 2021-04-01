<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;


class DoansinhController extends Controller
{
    public function xem_thongtin_ds($value='')
    {
    	$thongtin_doansinh = DB::table('tbl_doansinh')->orderby('doansinh_id','asc')->get();
    	return view ('doansinh.xemthongtin_ds')
    	->with('thongtin_doansinh',$thongtin_doansinh);
    }

    public function themthongtin_ds()
    {
        $layid = Session::get('user_id');
    	$kiemtra_nganh = DB::table('tbl_user')->where('user_id',$layid)->first();
        return view('doansinh.themthongtin_ds')
        ->with('kiemtra_nganh',$kiemtra_nganh);
    }

    public function luu_thongtin_ds(Request $r)
    {
    	$data = array();
        $data['doansinh_fullname'] = $r->fullname;
        $data['doansinh_dob'] = $r->dob;
        $data['doansinh_phone'] = $r->phone;
        $data['doansinh_level'] = $r->area;
        $data['doansinh_rank'] = 0;
        $data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');

        $results = DB::table('tbl_doansinh')->insert($data);
        if($results){
            Session::put('message','Thành công !');
            return Redirect::to('themthongtin-ds');
        }
    }

    public function suathongtin_ds($id)
    {
    	$show = DB::table('tbl_doansinh')->where('doansinh_id',$id)->first();
        return view('doansinh.suathongtin_ds')
        ->with('show',$show);
    }

    public function capnhat_thongtin_ds(Request $r)
    {
    	 DB::table('tbl_doansinh')->where('doansinh_id',$r->id)->update([
        'doansinh_fullname'=>$r->fullname,
        'doansinh_phone'=>$r->phone,
        'doansinh_dob'=>$r->dob
            ]);
        return redirect::to('xem-thongtin-ds');
    }

    public function xoa_thongtin_ds($id)
    {
    	DB::table('tbl_doansinh')->where('doansinh_id',$id)->delete();
        return redirect::to('xem-thongtin-ds');
    }


}
