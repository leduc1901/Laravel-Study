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


Route::get('/welcome', function () {
    return 'I love you';
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function (){
    Route::group(['prefix' => 'category'] ,function(){
        Route::get('', [
            'as' => 'admin.category.index',
            'uses' => 'CategoryController@index'
        ]); //admin/category
        Route::get('create', [
            'as' => 'admin.category.create',
            'uses' => 'CategoryController@create'
        ]); //admin/category
        Route::get('{id}/edit', [
            'as' => 'admin.category.edit',
            'uses' => 'CategoryController@edit'
        ]); //admin/category
    });
    Route::group(['prefix' => 'products'] ,function(){
        Route::get('', [
            'as' => 'admin.product.index',
            'uses' => 'ProductController@index'
        ]); //admin/category
        Route::get('create', [
            'as' => 'admin.product.create',
            'uses' => 'ProductController@create'
        ]); //admin/category
        Route::post('create', [
            'as' => 'admin.product.create',
            'uses' => 'ProductController@postCreate'
        ]);
        Route::get('{id}/edit', [
            'as' => 'admin.product.edit',
            'uses' => 'ProductController@edit'
        ]); //admin/category
    });
    Route::group(['prefix' => 'user'] ,function(){
        Route::get('', [
            'as' => 'admin.user.index',
            'uses' => 'UserController@index'
        ]); //admin/category
        Route::get('create', [
            'as' => 'admin.user.create',
            'uses' => 'UserController@getCreate'
        ]);
        Route::post('create', [
            'as' => 'admin.user.create',
            'uses' => 'UserController@postCreate'
        ]); //admin/category
        Route::get('{id}/edit', [
            'as' => 'admin.user.edit',
            'uses' => 'UserController@edit'
        ]); //admin/category
    });
    

});


Route::group(['namespace' => 'Client'], function(){
    Route::get('gioi-thieu', 'HomeController@about');

    Route::get('gio-hang' , 'CartController@cart');

    Route::get('gio-hang/thanh-toan' , 'CartController@checkout');

    Route::get('hoan-thanh' , 'CartController@complete');

    Route::get('lien-he' , 'HomeController@contact');

    Route::get('san-pham/{id}' , 'ProductController@detail');

    Route::get('san-pham', 'ProductController@shop');

    Route::get('', 'HomeController@index');
});

Route::get('form', 'FormController@get');
Route::post('form', 'FormController@post');

