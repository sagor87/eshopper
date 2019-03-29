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


