<?php


//Front End route.........................
Route::get('/', 'HomeController@index');

//show category in menu bar................
Route::get('/show_categoey/{category_id}', 'HomeController@show_categoey');
Route::get('/view_product/{product_id}', 'HomeController@product_details_by_id');
//add to cart route......................................
Route::post('/add_to_cart', 'CartController@add_to_cart');
Route::get('/show_cart', 'CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart');
Route::post('/update-cart', 'CartController@update_cart');




//Backend route............................
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/deshboard', 'SuperAdminController@index');
Route::post('/admin-deshboard', 'AdminController@deshboard');



//Category related route......................................
Route::get('/add_category', 'CategoryController@index');
Route::get('/all_category', 'CategoryController@all_category');
Route::post('/save_category', 'CategoryController@save_category');
Route::get('/edit_category/{category_id}', 'CategoryController@edit_category');
Route::post('/update_category/{category_id}', 'CategoryController@update_category');
Route::get('/delete_category/{category_id}', 'CategoryController@delete_category');
Route::get('/unactive_category/{category_id}', 'CategoryController@unactive_category');
Route::get('/active_category/{category_id}', 'CategoryController@active_category');

//Manufacture related route....................................................
Route::get('/add_manufactur', 'ManufacturController@index');
Route::get('/all_manufactur', 'ManufacturController@all_manufactur');
Route::post('/save_manufactur', 'ManufacturController@save_manufactur');
Route::get('/edit_manufactur/{manufactur_id}', 'ManufacturController@edit_manufactur');
Route::post('/update_manufactur/{manufactur_id}', 'ManufacturController@update_manufactur');
Route::get('/delete_manufactur/{manufactur_id}', 'ManufacturController@delete_manufactur');
Route::get('/unactive_manufactur/{manufactur_id}', 'ManufacturController@unactive_manufactur');
Route::get('/active_manufactur/{manufactur_id}', 'ManufacturController@active_manufactur');

//Product route area............................................................

Route::get('/add_product', 'ProductController@index');
Route::post('/save_product', 'ProductController@save_product');
Route::get('/all_product', 'ProductController@all_product');
Route::get('/edit_product/{product_id}', 'ProductController@edit_product');
Route::post('/update_product/{product_id}', 'ProductController@update_product');
Route::get('/delete_product/{product_id}', 'ProductController@delete_product');
Route::get('/unactive_product/{product_id}', 'ProductController@unactive_product');
Route::get('/active_product/{product_id}', 'ProductController@active_product');

//Slider route area here........................................................
Route::get('/add_slider', 'SliderController@index');
Route::post('/save_slider', 'SliderController@save_slider');
Route::get('/all_slider', 'SliderController@all_slider');
Route::get('/delete_slider/{slider_id}', 'SliderController@delete_slider');
Route::get('/unactive_slider/{slider_id}', 'SliderController@unactive_slider');
Route::get('/active_slider/{slider_id}', 'SliderController@active_slider');