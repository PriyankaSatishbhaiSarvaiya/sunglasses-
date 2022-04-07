<?php

use Illuminate\Support\Facades\Route;
use App\modules\Frontend\Http\Controllers\FrontendController;
use App\Modules\Frontend\Http\Controllers\CartController;



// Route::get('/products/grid',[FrontendController::class,'grid']);

// Route::get('/products/list',[FrontendController::class,'list']);
Route::get('/products',[FrontendController::class,'filter']);
Route::get('products/{url}',[FrontendController::class,'details']);
Route::get('/increment/{id}',[FrontendController::class,'increment']);

Route::get('/filter/price',[FrontendController::class,'price_filter']);
//  Route::get('/filter/price',[FrontendController::class,'price_filter']);

Route::get('/add-to-cart',[CartController::class,'addToCartData']);
Route::get('incrementcart/{id}','CartController@increment');
Route::get('delete-cart','CartController@removeCartData');
Route::post('update-qty-cart','CartController@updateQtyCart');
 
