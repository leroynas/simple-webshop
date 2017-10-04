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

Auth::routes();

Route::get('/', 'CategoryController@index')->name('home');

Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category', 'CategoryController@store')->name('category.store');

Route::get('category/{category}/product/create', 'ProductController@create')->name('product.create');
Route::post('category/{category}/product', 'ProductController@store')->name('product.store');

Route::get('/{category}', 'ProductController@index')->name('product.index');
Route::get('/{category}/{product}', 'ProductController@show')->name('product.show');

