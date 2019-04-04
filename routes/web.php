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
//Frontend Routes-----------------------------------------------------------------------------
Route::get('/', 'PagesController@index')->name('home');




//Admin Routes-----------------------------------------------------------------------------
Route::get('/backend', 'AdminPagesController@login')->name('admin.login');
Route::post('/backend/index', 'AdminController@index')->name('admin.login.home');
Route::get('/backend/logout', 'AdminController@destroy')->name('admin.logout');
Route::get('/backend/index', 'AdminPagesController@index')->name('admin.home');

//Category related Route------------------------------------------------------
Route::get('/backend/add-category', 'CategoryController@index')->name('add.category');
Route::get('/backend/all-category', 'CategoryController@all_category')->name('all.category');
Route::post('/backend/add-category', 'CategoryController@store')->name('store.category');
Route::get('/backend/inactive-category/{category_id}', 'CategoryController@inactive_category')->name('inactive_category');
Route::get('/backend/active-category/{category_id}', 'CategoryController@active_category')->name('active_category');
Route::get('/backend/edit-category/{category_id}', 'CategoryController@edit_category')->name('edit_category');
Route::post('/backend/update-category/{category_id}', 'CategoryController@update_category')->name('update_category');
Route::get('/backend/delete-category/{category_id}', 'CategoryController@delete_category')->name('delete_category');




//Brand related Route------------------------------------------------------

Route::get('/backend/add-brand', 'BrandController@index')->name('add.brand');
Route::get('/backend/all-brand', 'BrandController@all_brand')->name('all.brand');
Route::post('/backend/add-brand', 'BrandController@store')->name('store.brand');
Route::get('/backend/inactive-brand/{brand_id}', 'BrandController@inactive_brand')->name('inactive_brand');
Route::get('/backend/active-brand/{brand_id}', 'BrandController@active_brand')->name('active_brand');
Route::get('/backend/edit-brand/{brand_id}', 'BrandController@edit_brand')->name('edit_brand');
Route::post('/backend/update-brand/{brand_id}', 'BrandController@update_brand')->name('update_brand');
Route::get('/backend/delete-brand/{brand_id}', 'BrandController@delete_brand')->name('delete_brand');


//Product related Route---------------------------------------------------------
Route::get('/backend/add-product', 'ProductController@index')->name('add.product');
Route::post('/backend/add-product', 'ProductController@store')->name('add.product');
Route::get('/backend/all-product', 'ProductController@all_product')->name('all.product');
Route::get('/backend/inactive-product/{product_id}', 'ProductController@inactive_product')->name('inactive_product');
Route::get('/backend/active-product/{product_id}', 'ProductController@active_product')->name('active_product');

Route::get('/backend/edit-product/{product_id}', 'ProductController@edit_product')->name('edit_product');
Route::post('/backend/update-product/{product_id}', 'ProductController@update_product')->name('update_product');
Route::get('/backend/delete-product/{product_id}', 'ProductController@delete_product')->name('delete_product');
