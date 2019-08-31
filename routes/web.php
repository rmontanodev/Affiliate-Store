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
//index
Route::get('/','HomeController@index');


//Section products
Route::get('/products', array('uses'=>'Offers@index','as'=>'productos'));
Route::get('/products/brand/{brand_id}',array('uses'=>'Offers@filterbrand','as'=>'brand'));
Route::get('/products/{category_id}',array('uses'=>'Offers@filtercategory','as'=>'category'));
Route::get('/products/{category_id}/{brand_id}',array('uses'=>'Offers@mixedfilter','as'=>'brandcategory'));
Route::get('/products/filterprice/{min}/{max}',array('uses'=>'Offers@fiterbyprice','as'=>'productfilterprice'));

//Login
Route::get('/logout','Auth\LoginController@logout');

//Pagination
Route::get('/products/pagination/{page}','Offers@pagination');

//This makes all routes require Auth
Auth::routes();

