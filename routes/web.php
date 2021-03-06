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

//访问到admin控制器下的user方法
Route::get('/admin/{id}','Admin\admin@user');
Route::get('/add','Admin\admin@add');
Route::get('/del/{id}','Admin\admin@del');
Route::get('/up/{id}','Admin\admin@up');
Route::get('/show','Admin\admin@show');
