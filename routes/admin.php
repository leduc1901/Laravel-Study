<?php

use Illuminate\Http;

/*
|--------------------------------------------------------------------------
| Admin Route Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin Route routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web" middleware group. Enjoy building your Admin Route!
|
*/
//Guest route
Route::get('',[
    'as' => 'admin.dashboard.index',
    'uses' => 'DashboardController@index'
]);




Route::resource('products','ProductController',[
    'as' => 'admin',
    'parameters' => ['products' => 'id']
]);
Route::resource('users','UserController',[
    'as' => 'admin',
    'parameters' => ['users' => 'id']
]);
Route::resource('categories','CategoryController',[
    'as' => 'admin',
    'parameters' => ['categories' => 'id']
]);

//cai nay dat trc
Route::get('orders/processed',[
    'as' => 'admin.orders.processed',
    'parameters' => ['orders' => 'id']
]);
Route::resource('orders','OrderController',[
    'as' => 'admin',
    'parameters' => ['orders' => 'id']
]);

Route::get('login',[
    'as' => 'admin.login.showLoginForm',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login',[
    'as' => 'admin.login.login',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout',[
    'as' => 'admin.login.logout',
    'uses' => 'Auth\LoginController@logout'
]);