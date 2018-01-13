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

Route::Group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/','IndexController@index');
    Route::get('welcome','IndexController@welcome');
    Route::resource('article','ArticleController');
    Route::resource('picture','PictureController');
    Route::resource('brand','BrandController');
    Route::resource('category','CategoryController');
    Route::resource('product','ProductController');
    Route::resource('comment','CommentController');
    Route::resource('member','MemberController');
    Route::resource('level','LevelController');
    Route::resource('score','ScoreController');
    Route::resource('record','RecordController');
    Route::resource('role','RoleController');
    Route::resource('permission','PermissionController');
    Route::resource('admin','AdminController');
    Route::resource('system','SystemController');
    Route::resource('system_category','SystemCategoryController');
    Route::resource('system_log','SystemLogController');


});
