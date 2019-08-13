<?php

use Illuminate\Http;

Route::get('',[
    'as' => 'client.home.index',
    'uses' => 'HomeController@index'
]);
Route::get('about',[
    'as' => 'client.home.about',
    'uses' => 'HomeController@about'
]);
Route::get('contact',[
    'as' => 'client.home.contact',
    'uses' => 'HomeController@contact'
]);
Route::get('cart',[
    'as' => 'client.cart.index',
    'uses' => 'CartController@index'
]);
Route::get('cart/checkout',[
    'as' => 'client.cart.checkout',
    'uses' => 'CartController@checkout'
]);
Route::get('cart/complete/{id}',[
    'as' => 'client.cart.complete',
    'uses' => 'CartController@complete'
]);
Route::post('/cart/add',[
    'as' => 'client.cart.add',
    'uses' => 'CartController@add'
]);
Route::post('/cart/store',[
    'as' => 'client.cart.store',
    'uses' => 'CartController@store'
]);
Route::post('/cart/update' , [
    'as' => 'client.cart.update' , 
    'uses' => 'CartController@update'
]);
Route::post('/cart/destroy' , [
    'as' => 'client.cart.destroy' , 
    'uses' => 'CartController@destroy'
]);
Route::get('products',[
    'as' => 'client.products.index',
    'uses' => 'ProductController@index'
]);
Route::get('products/{id}',[
    'as' => 'client.products.detail',
    'uses' => 'ProductController@detail'
]);
