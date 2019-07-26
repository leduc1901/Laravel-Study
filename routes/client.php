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
Route::get('complete',[
    'as' => 'client.cart.complete',
    'uses' => 'CartController@complete'
]);
Route::get('products',[
    'as' => 'client.products.index',
    'uses' => 'ProductController@index'
]);
Route::get('products/{id}',[
    'as' => 'client.products.detail',
    'uses' => 'ProductController@detail'
]);
