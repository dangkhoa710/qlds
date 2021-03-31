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
    	$show = DB::table('tbl_user')->join('tbl_quyen','tbl_quyen.id','=','tbl_user.user_permision')->orderby('user_id','asc')->get();
    	return view('user.xemthongtin_all')
    	->with('show',$show);
    }

    public function suathongtin_truong($id)
    {
    	$show = DB::table('tbl_user')->join('tbl_quyen','tbl_quyen.id','=','tbl_user.user_permision')->where('user_id',$id)->first();
    	return view('user.suathongtin_user')
        ->with('show',$show);
    }
    // onclick="return confirm('Bạn có chắc là muốn xóa tin này ko ?')"
    public function capnhat_thongtin_truong(Request $r)
    {
        DB::table('tbl_user')->where('user_id',$r->id)->update([
        'user_fullname'=>$r->fullname,
        'user_phone'=>$r->phone
            ]);
        return redirect::to('xem-thongtin-truong');

    }
    public function xoa_thongtin_truong($id)
    {
        DB::table('tbl_user')->where('user_id',$id)->delete();
        return redirect::to('xem-thongtin-truong');
    }
}
