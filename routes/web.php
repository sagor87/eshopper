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
Route::get('/product_by_category/{category_id}', 'PagesController@show_product_by_category')->name('product_by_category');
Route::get('/product_by_brand/{brand_id}', 'PagesController@show_product_by_brand')->name('product_by_brand');
Route::get('/product_view/{product_id}', 'PagesController@product_view')->name('product.view');

//Cart Related Route--------------------------------------------------------------------------

Route::post('/show_cart', 'CartController@add_cart')->name('add.cart');
Route::get('/show_cart', 'CartController@show_cart')->name('show.cart');
Route::get('/delete_cart_row/{rowId}', 'CartController@delete_cart_row')->name('delete_cart_row');
Route::post('/update_cart_row', 'CartController@update_cart_row')->name('update_cart_row');


//Checkout releted Route--------------------------------------------------
Route::get('/login_check', 'checkoutController@login_check')->name('login_check');
Route::get('/checkout', 'checkoutController@checkout')->name('checkout');
Route::post('/confirm_shipping', 'shippingController@confirm_shipping')->name('confirm_shipping');
Route::get('/payment', 'shippingController@payment')->name('payment');


//customer Releted Route------------------------------------------------------------------
Route::post('/customer_registration', 'CustomerController@customer_registration')->name('customer_registration');
Route::get('/logout', 'CustomerController@destroy')->name('customer.logout');
Route::post('/login', 'CustomerController@index')->name('customer.login');


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


//Slider route--------------------------------------------------------------------------------
Route::get('/backend/add-slider', 'SliderController@index')->name('add.slider');
Route::post('/backend/add-slider', 'SliderController@store')->name('add.slider');
Route::get('/backend/all-slider', 'SliderController@all_slider')->name('all.slider');
Route::get('/backend/inactive-slider/{id}', 'SliderController@inactive_slider')->name('inactive_slider');
Route::get('/backend/active-slider/{id}', 'SliderController@active_slider')->name('active_slider');

Route::get('/backend/delete-slider/{id}', 'SliderController@delete_slider')->name('delete_slider');
