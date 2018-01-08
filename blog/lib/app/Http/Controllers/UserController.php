<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Users;
class UserController extends Controller
{
    //
    public function model(){
      $user = new Users();
      $user->user_full="admin1";
      $user->user_pass="123";
      $user->user_name="admin1";
      $user->user_level=1;
      $user->user_mail="admin1@gmail.com";
      $user->save();
    }

    public function admin(){
      $user=DB::table('users')->paginate(2);
      return view('backend.admin',['users'=>$user]);
      // $users = DB::table('users') ben view
            //           ->whereColumn([
      //               ['first_name', '=', 'last_name'],
      //               ['updated_at', '>', 'created_at']
      //           ])->get();

    }
}
