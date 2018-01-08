<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CateggoryModel;
use App\Http\Requests\CateRequest;
use App\Http\Requests\editcateRequest;
class CategoryController extends Controller
{
    //

    public function getcate(){
      $data['listcate']=CateggoryModel::all();
      return view('category',$data);
    }
    public function geteditcate($id){
      $data['cate']= CateggoryModel::find($id);
      return view('editcategory',$data);
    }
    public function deletecate($id){
      CateggoryModel::destroy($id);
        return back();
    }
    public function addcate(CateRequest $request){
      $category= new CateggoryModel;
      $category->cate_name=$request->name;
      $category->cate_slug=str_slug($request->name);
      $category->save();
      return back();
    }
    public function editcate(editcateRequest $request, $id){
      $cate = CateggoryModel::find($id);
      $cate->cate_name=$request->name;
      $cate->cate_slug=str_slug($request->name);
      $cate->save();
      return back();
    }
}
