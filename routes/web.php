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
