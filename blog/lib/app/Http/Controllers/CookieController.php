<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    //
    public function setcookie(){
      $response = new Response();
      $response->withCookie('khoahoc','laravel',2);
      return $response;
    }
    public function getcookie(Request $request){
      return $request->cookie('khoahoc');
    }
}
