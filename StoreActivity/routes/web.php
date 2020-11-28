<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/stores','StoresController@index');
Route::get('/stores/{store}','StoresController@show');
Route::get('/products', 'ProductsController@index');
Route::get('/products/{product}/edit', 'ProductsController@edit');
Route::put('/products/{product}', 'ProductsController@update');
Route::get('/product-details', 'ProductsController@details');