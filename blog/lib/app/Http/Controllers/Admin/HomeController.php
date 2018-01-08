<?php

namespace App\Http\Controllers\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function getHome(){
        return view('index');
    }
    public function getlogout(){
      Auth::logout();
      return redirect()->intended('login');
    }

    public function geteditproduct(){
      return view('editproduct');
    }
}
