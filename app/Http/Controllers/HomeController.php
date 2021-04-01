<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use File;


class HomeController extends Controller
{
    public function index()
    {
    	$user_id = Session::get('user_id');
        if($user_id){
            return Redirect::to('/dashboard');
        }
        else{
        return view('user.login');}
    }

    public function AuthLogin(){
        $user_id = Session::get('user_id');
        if($user_id){
            return Redirect::to('/dashboard');
        }
        else{
            return Redirect::to('/')->send();}
        }


   	public function dashboard()
	    {
	    	$this->AuthLogin();

            
            $laythuhientai=Carbon::now('Asia/Ho_Chi_Minh')->format('l');

            if($laythuhientai=="Sunday"){


               
                $gio_tuantoi5 = Carbon::now('Asia/Ho_Chi_Minh')->addDays(4)->toDateString();
                $thu_tuantoi5 = Carbon::now('Asia/Ho_Chi_Minh')->addDays(4)->format('l');             

                $gio_tuantoi8 = Carbon::now('Asia/Ho_Chi_Minh')->addDays(7)->toDateString();
                $thu_tuantoi8 = Carbon::now('Asia/Ho_Chi_Minh')->addDays(7)->format('l');



                $dem5 = DB::table('tbl_giosinhhoat')->where('ngaysinhhoat',$gio_tuantoi5)->count();
                $dem8 = DB::table('tbl_giosinhhoat')->where('ngaysinhhoat',$gio_tuantoi8)->count();

                // return view($dem8);

                if(($dem5=="0")&($dem8=="0"))
                {
                    // return view($gio_tuantoi5);
                    DB::table('tbl_giosinhhoat')->insert(['ngaysinhhoat'=> $gio_tuantoi5,'thu'=> $thu_tuantoi5,'tinhtrang'=>0]);
                    DB::table('tbl_giosinhhoat')->insert(['ngaysinhhoat'=> $gio_tuantoi8,'thu'=> $thu_tuantoi8,'tinhtrang'=>0]);
                    DB::table('tbl_diemdanh')->insert(['created_at'=> $gio_tuantoi5,'thu'=> $thu_tuantoi5]);
                    DB::table('tbl_diemdanh')->insert(['created_at'=> $gio_tuantoi8,'thu'=> $thu_tuantoi8]);
                }

                $nam = DB::table('tbl_giosinhhoat')->where('thu','Thursday')->orderby('giosinhhoat_id','desc')->first();

                $chunhat = DB::table('tbl_giosinhhoat')->where('thu','Sunday')->orderby('giosinhhoat_id','desc')->first();

                return view('trang.home')
                ->with('nam1',$nam->tinhtrang)
                ->with('chunhat1',$chunhat->tinhtrang)
                ->with('nam_id',$nam->giosinhhoat_id)
                ->with('chunhat_id',$chunhat->giosinhhoat_id)
                ;
            }
            elseif($laythuhientai=="Thursday" ){

                //lấy tình trạng thứ năm sau
                $nam = DB::table('tbl_giosinhhoat')->where('thu','Thursday')->orderby('giosinhhoat_id','desc')->first();

                //lấy tình trạng chủ nhật sau
                $chunhat = DB::table('tbl_giosinhhoat')->where('thu','Sunday')->orderby('giosinhhoat_id','desc')->first();

                //nếu tình trạng thứ năm chưa có gì
                if(($nam->tinhtrang)=="0"){

                    //chèn vào DB tình trạng 2 , tức là không xác định
                    DB::table('tbl_giosinhhoat')->where('ngaysinhhoat',(Carbon::now('Asia/Ho_Chi_Minh')->toDateString()))->update(['tinhtrang'=> "2"]);

                    return view('trang.home')
                    ->with('nam1','2')
                    ->with('chunhat1',$chunhat->tinhtrang)
                    ->with('nam_id',$nam->giosinhhoat_id)
                    ->with('chunhat_id',$chunhat->giosinhhoat_id);
                }
                //nếu tình trạng chủ nhật sau = 1 , có sinh hoạt
                elseif(($nam->tinhtrang)=="1"){
                    return view('trang.home')
                    ->with('nam1','1')
                    ->with('chunhat1',$chunhat->tinhtrang)
                    ->with('nam_id',$nam->giosinhhoat_id)
                    ->with('chunhat_id',$chunhat->giosinhhoat_id);
                }
                elseif(($nam->tinhtrang)=="3"){
                    return view('trang.home')
                    ->with('nam1','3')
                    ->with('chunhat1',$chunhat->tinhtrang)
                    ->with('nam_id',$nam->giosinhhoat_id)
                    ->with('chunhat_id',$chunhat->giosinhhoat_id);
                }
                else{               
                return view('trang.home')
                    ->with('nam1','2')
                    ->with('chunhat1',$chunhat->tinhtrang)
                    ->with('nam_id',$nam->giosinhhoat_id)
                    ->with('chunhat_id',$chunhat->giosinhhoat_id);
                }

            }
            else
            {
                $nam = DB::table('tbl_giosinhhoat')->where('thu','thursday')->orderby('giosinhhoat_id','desc')->first();

                $chunhat = DB::table('tbl_giosinhhoat')->where('thu','sunday')->orderby('giosinhhoat_id','desc')->first();

                return view('trang.home')
                ->with('nam1',$nam->tinhtrang)
                ->with('chunhat1',$chunhat->tinhtrang)
                ->with('nam_id',$nam->giosinhhoat_id)
                ->with('chunhat_id',$chunhat->giosinhhoat_id);
            }

	    }

	public function login_user(Request $request){
        $username = $request->username;
        $password = $request->password;

        $result = DB::table('tbl_user')->where([
            ['user_name',$username],
            ['user_password',$password],
        ])->first();

        if($result){
	        if($password=="1")
	        {
	            return view ("user.doimatkhaulandau")
	            ->with('user',$username)
	            ->with('permision',$result->user_permision)
	            ->with('id',$result->user_id);
	        }
	        else{
            	Session::put('user_name',$username); 
                Session::put('user_fullname',$result->user_fullname);
                Session::put('user_id',$result->user_id);
                Session::put('user_permision',$result->user_permision);
                Session::put('user_area',$result->user_area);
                return Redirect::to('/dashboard');
	            }   
    	}else{
			Session::put('message','Mật khẩu hoặc tên tài khoản không đúng, nhập lại !');
			return Redirect::to('/');
    	}

    }
	public function logout(){
		Session::put('user_name',null);
		Session::put('user_id',null);
		Session::put('user_permision',null);
        Session::put('user_area',null);
		return Redirect::to('/');

	}

	public function luu_doimatkhaulandau(Request $a)
	{
		$data = array();
        $data['user_fullname'] = $a->fullname;
        $data['user_dob'] = $a->dob;
        $data['user_area'] = $a->area;
        $data['user_phone']    = $a->phone;
        $data['user_password'] = $a->password2;

        $upd = DB::table('tbl_user')
              ->where('user_name', ($a->username))
              ->update($data);
        
        Session::put('user_name',$a->username); 
        Session::put('user_fullname',$a->fullname);
        Session::put('user_id',$a->id);
        Session::put('user_permision',$a->permision);
        Session::put('user_area',$result->user_area);
        
        return Redirect::to('/dashboard');
	}

}
