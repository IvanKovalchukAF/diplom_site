<?php

Route::get('/', function () {
    return view('layouts/main');
});

Route::post ('order_ok', [
    'uses' => 'OrdersController@orderAction'
]);

Route::get('/categories/{id}', [
    'uses' => 'CategoriesController@categoryAction'
]);

Route::get('/goods/{id}', [
    'uses' => 'GoodsController@showAction'
]);

Route::get('/order/{id}', [
    'uses' => 'OrdersController@buyAction'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
