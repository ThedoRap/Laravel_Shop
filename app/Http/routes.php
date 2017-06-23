<?php

//引入前台路由
include_once("WebRoute.php");
include_once("AdminRoute.php");

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {

	// echo config('app.timezone');
	// dd($_ENV);
    // return view('welcome');
// });

//######################前台#################################


//######################后台#################################

Route::group([],function(){

	Route::get('/admin', 'AdminController@index');
	//登录
	// Route::get('/admin/login', 'AdminController@login');
	// Route::post('/admin/login', 'AdminController@login');
	//网站设置页
	Route::get('/admin/info', 'AdminController@info');
	//用户模块

	//商品分类模块
	Route::get('/admin/cate_list', 'AdminController@cate_list');
	Route::get('/admin/cate_add', 'AdminController@cate_add');
	Route::post('/admin/cate_add','AdminController@doCateAdd');
	Route::get('/admin/cate_edit/{id}/{pid}/{name}', 'AdminController@cate_edit');
	Route::post('/admin/cate_edit/','AdminController@doCateEdit');
	Route::get('/admin/cate_del/{id}', 'AdminController@cate_del');
	Route::get('/admin/cate_child/{id}/{pid}', 'AdminController@cate_child');
	Route::post('/admin/cate_child', 'AdminController@doCateChild');

	//商品模块
	Route::get('/admin/goods_list', 'GoodsController@index');
	Route::get('/admin/goods_add', 'GoodsController@add');
	Route::get('/admin/goods_edit', 'GoodsController@edit');
	Route::get('/admin/goods_del', 'GoodsController@del');
	//订单模块
	Route::get('/admin/order_list', 'AdminController@order_list');
	Route::get('/admin/order_add', 'AdminController@order_add');
	Route::get('/admin/order_edit', 'AdminController@order_edit');
	Route::get('/admin/order_del', 'AdminController@order_del');
	//管理员
	Route::get('/admin/admin_add/', 'AdminController@admin_add');
	Route::post('/admin/admin_add/', 'AdminController@doAdminAdd');
	Route::get('/admin/admin_list', 'AdminController@admin_list');
	Route::get('/admin/admin_edit/{id}', 'AdminController@admin_edit');
	Route::post('/admin/admin_edit/', 'AdminController@doAdminEdit');
	Route::get('/admin/admin_del/{id}', 'AdminController@admin_del');

});
// Route::get('/admin', 'AdminController@index');
// Route::get('/admin', 'AdminController@index');
// Route::get('/admin', 'AdminController@index');
// Route::get('/admin', 'AdminController@index');
//Route::get('/Admin/login', 'AdminController@login');//后台登录
//Route::post('/Admin/login', 'AdminController@login');//后台登录处理



// Route::get('/user/{id}', function($id){
// 	dump($id);
// });

// Route::get('/user/{id}/commit/{c_id?}', function($id ,$c_id=null){
// 	return $id."---".$c_id;
// });


// Route::get('/page/{num?}' ,function($num=1){
// 	return $num;
// });

// Route::get('/page/{num?}', function($num=1){

// })->where('num','[0-9]+');

// Route::get('page/{name?}', function($name='type'){

// })->where('name','[a-zA-Z]+');

 // Route::get('pro', 'ProController@index')->name('p');

 // Route::get('/pro/{id}','ProController@index');
//---------------前台
 // Route::get('/home/','HomeController@index');
//---------------后台
 // Route::get('/admin/','AdminController@index');
//添加
 // Route::get('/admin/add','AdminController@add');
//修改
 // Route::get('/admin/edit/{id}',[
 // 		'as'=>'aedit',
 // 		'edit'=>'AdminController@edit'
 // 	]);
//删除
// Route::get('/admin/delete','AdminController@delete');
//登录
// Route::get('/admin/login/','AdminController@login');

//处理登录
// Route::post('/admin/dologin','AdminController@dologin');

// 127.0.0.1   localhost localhost.localdomain localhost4 localhost4.localdomain4
// ::1         localhost localhost.localdomain localhost6 localhost6.localdomain6

// Route::get('/pro','ProController@index');
