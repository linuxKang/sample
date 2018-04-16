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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');
Route::get('/signup','UsersController@create')->name('signup');
//定义用户资源路由，一行代码相当于完成了所有的资源获取、创建、修改及删除，分别对应 HTTP 协议提供的 GET、POST、PATCH 和 DELETE 方法
Route::resource('users','UsersController');