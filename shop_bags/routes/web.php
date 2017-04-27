<?php

Route::get('/', function () {
    return view('layouts/main');
});

Route::get('/categories/{id}', [
    'uses' => 'CategoriesController@categoryAction'
]);

Route::get('/goods/{id}', [
    'uses' => 'GoodsController@showAction'
]);

Route::get('/order/{id}', [
    'uses' => 'OrdersController@buyAction'
]);

Route::get('order_final', [
    'uses' => 'OrdersController@finishAction'
]);

Route::get('registry', 'RegistryController@registryAction');

Route::get('pricing', 'PricingController@pricingAction');
