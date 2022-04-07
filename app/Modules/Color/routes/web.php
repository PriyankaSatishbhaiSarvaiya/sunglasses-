<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Color\Http\Controllers\ColorController;

Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth');


Route::get('color', 'ColorController@welcome');
Route::get('/admin/colors/Addcolor',[ColorController::class,'welcome']);
Route::get('/admin/colors/list',[ColorController::class,'getdata']);
Route::post('/admin/colors/list',[ColorController::class,'getdata']);
Route::get('/admin/colors/list',[ColorController::class,'show']);
Route::get('/admin/colors/list',[ColorController::class,'show']);
Route::get('/admin/colors/changeStatus',[ColorController::class,'changeStatus']);
Route::get('/admin/colors/edit/{id}',[ColorController::class,'edit']);
Route::POST('/admin/colors/edit/{id}',[ColorController::class,'update']);
Route::get('/admin/colors/completedUpdate',[ColorController::class,'completedUpdate']);
Route::get('/admin/colors/trash',[ColorController::class,'trashshow']);
Route::get('//admin/colors/completedUpdated',[ColorController::class,'completedUpdated']);
Route::get('/admin/colors/delete/{id}',[ColorController::class,'destroy']);
Route::get('try',[ColorController::class,'set']);
Route::get('/admin/colors/uniquename',[Colorcontroller::class,'uniquename']);
