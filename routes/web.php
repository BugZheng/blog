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

Route::get('/test','IndexController@test' );
Route::get('/testdb','IndexController@testdb' );


Route::get('/user/{name?}','IndexController@user');

Route::get('form_without_csrf_token', function (){
    return '<form method="POST" action="hello_from_form"><button type="submit">提交</button></form>';
});

Route::get('form_with_csrf_token', function () {
    return '<form method="POST" action="hello_from_form">' . csrf_field() . '<button type="submit">提交</button></form>';
});

Route::post('hello_from_form', function (){
    return 'hello laravel!';
});

//认证组件的路由在这里生效
//路由地址写在：blog\vendor\laravel\framework\src\Illuminate\Routing\Router.php 里面的auth()方法
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/queue', 'IndexController@queue');
