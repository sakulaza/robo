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

Route::get('/', 'HomeController@index');

$categories = \App\Category::all();
foreach($categories as $c){
    $temp = explode('/',$c->cname);
    $temp2 = array_filter($temp);
    $path = implode('/',$temp2);
    Route::get("$path",'ArticleController@article');
}

Route::get('/phpinfo', function () {
    echo phpinfo();
});

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/add_user', 'Auth\RegisterController@showForm');
Auth::routes();
Route::post('register_email', 'Auth\RegisterController@sendInfo');

Route::get('/home', 'HomeController@index');
Route::get('/pay', 'PayController@index');
Route::post('/pay_recharge', 'PayController@recharge');
Route::get('/bfopay_repond', 'PayController@repond');

//Route::get('/about/{type?}','ArticleController@about');
//Route::get('/trade-conditions/{type?}','ArticleController@trade_conditions');
//Route::get('/trading-accounts/{type?}','ArticleController@trading_accounts');
//Route::get('/operations/{type?}','ArticleController@operations');
//Route::get('/forex-affiliate/{type?}','ArticleController@forex_affiliate');
//Route::get('/beginner/{type?}','ArticleController@beginner');
//Route::get('/analytics/{type?}','ArticleController@analytics');
Route::get('/analytics/forex-forecast/{cat}/{id}','ArticleController@forex_forecast');
Route::get('/about/news/{cat}/{id}','ArticleController@news');
Route::get('operations/{cat}/{id}','ArticleController@operations_info');

Route::group(['prefix'=>'admin', 'middleware' => 'web'], function(){
    Route::get('/', 'AdminController@index');
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login');
    Route::post('logout', 'Auth\AdminLoginController@logout');
    Route::resource('category', 'CategoryController', ['except' => 'show']);
    Route::resource('post', 'PostController', ['except' => 'show']);
    Route::post('uploadImage', 'AdminController@uploadImage');
});