<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function getlistproduct(){
      return view('product');
    }
    public function editproduct($id){
      return view('editproduct');

    }
    public function deleteproduct($id){
      return redirect()->intended('product');
    }
    public function insertproduct(){
      return view('addproduct');
    }
}
