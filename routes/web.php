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
Route::get('/','HomeController@index');
Route::get('/products', array('uses'=>'Offers@index','as'=>'productos'));
Route::get('/products/brand/{name}',array('uses'=>'Offers@filterbrand','as'=>'productbrand'));
Route::get('/logout','Auth\LoginController@logout');
Route::get('products/category/{name}',array('uses'=>'Offers@filtercategory','as'=>'productcategory'));
Auth::routes();

