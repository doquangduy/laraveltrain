<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    //
    public function login(){
      return view('login');
    }
    public function loginperform(Request $request){
      $arr= ['email'=>$request->email, 'password'=>$request->password];
      if(Auth::attempt($arr)){
        return redirect()->intended('admin/home');
      }else{
        return back()->withInput()->with('error',"Tài khoản hoặc mật khẩu chưa đúng");
      }
    }
}
