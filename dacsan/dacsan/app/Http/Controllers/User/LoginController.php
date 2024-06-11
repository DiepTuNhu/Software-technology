<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.login');
    }

    public function store(Request $req)
    {
       
        $this->validate($req,
        [
             'email'=>'required|email',
             'password'=>'required|min:3|max:20'
        ],
        [
             'email.required'=>'Vui lòng nhập email',
             'email.email'=>'Không đúng định dạng email',
             'password.required'=>'Vui lòng nhập mật khẩu',
             'password.min'=>'Mật khẩu có ít nhất 6 kí tự',
             'password.max'=>'Mật khẩu không quá 20 kí tự'
        ]);
        //Chứng thực
         $credentials=array('password'=>$req->password,'email'=>$req->email);
         if(Auth::attempt($credentials)){
             return redirect()->route('categories.index')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
         }else{
             return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại']);
         }

        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('page.index');
    }
}
