<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/about/{type?}','ArticleController@about');
Route::get('/trade-conditions/{type?}','ArticleController@trade_conditions');

Route::group(['prefix'=>'admin', 'middleware' => 'web'], function(){
    Route::get('/', 'AdminController@index');
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login');
    Route::post('logout', 'Auth\AdminLoginController@logout');
    Route::resource('category', 'CategoryController', ['except' => 'show']);
    Route::resource('post', 'PostController', ['except' => 'show']);
});