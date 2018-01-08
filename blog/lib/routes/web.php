<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace'=>'Admin'],function(){
  Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
    Route::get('/','LoginController@login');
    Route::post('/','LoginController@loginperform');

});
Route::get('logout','HomeController@getlogout');
Route::group(['prefix'=>'admin',"middleware"=>'CheckLogedOut'],function(){

  Route::get('home',"HomeController@getHome");


});
Route::group(['prefix'=>'cate','middleware'=>'CheckLogedOut'], function(){
  Route::get('/',"CategoryController@getcate");
  Route::post('/',"CategoryController@addcate");
  Route::get('edit/{id}','CategoryController@geteditcate');
  Route::post('edit/{id}','CategoryController@editcate');
    Route::get('delete/{id}','CategoryController@deletecate');
});
});
