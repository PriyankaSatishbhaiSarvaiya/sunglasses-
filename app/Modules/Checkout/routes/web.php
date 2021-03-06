<?php

use Illuminate\Support\Facades\Route;


// Route::group(['prefix'=>'/checkout','middleware'=>['auth','isAdmin']],function(){

Route::get('/billing', 'CheckoutController@checkout_billing');
Route::post('/admin/billing', 'CheckoutController@store_billing');
// Route::post('/billing', 'CheckoutController@checkout_billing');
Route::get('/shipping', 'CheckoutController@checkout_shipping');
Route::post('/shipping', 'CheckoutController@store_shipping');
Route::get('/order', 'CheckoutController@checkout_order_review');
Route::post('/order', 'CheckoutController@store_order');
Route::get('payment', 'CheckoutController@checkout_payment');
Route::post('/payment', 'CheckoutController@store_payment');
Route::get('myorders', 'CheckoutController@myorders');
Route::get('/myorders_view/{id}','CheckoutController@myorder_view');







