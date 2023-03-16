<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\MotorsController;
use App\Http\Controllers\TransactionsController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::get('/coba', function () {
    dd('Welcome to admin user routes.');
});
//login

Route::get('/login',[LoginController::class,'login']);
Route::post('/postlogin',[LoginController::class,'adminlogin']);
Route::get('/logout',[LoginController::class,'logout']);


// Route::group(['middleware'=>'auth'],function(){
    
Route::get('/categori',[CategoriesController::class,'index']);
Route::get('/categori/create',[CategoriesController::class,'create']);
Route::post('/categori/store',[CategoriesController::class,'store']);
Route::get('/categori/edit/{id}',[CategoriesController::class,'edit']);
Route::put('/categori/update/{id}',[CategoriesController::class,'update']);
Route::get('/categori/destroy/{id}',[CategoriesController::class,'destroy']);


//dashboard

Route::get('/dashboard',[AdminController::class,'index']);
//master data categori

//model
Route::get('/model',[ModelsController::class,'index']);
Route::get('/model/create',[ModelsController::class,'create']);
Route::post('/model/store',[ModelsController::class,'store']);
Route::get('/model/edit/{id}',[ModelsController::class,'edit']);
Route::put('/model/update/{id}',[ModelsController::class,'update']);
Route::get('/model/destroy/{id}',[ModelsController::class,'destroy']);
//motor
Route::get('/motor',[MotorsController::class,'index']);
Route::get('/motor/create',[MotorsController::class,'create']);
Route::post('motor/store',[MotorsController::class,'store']);
Route::get('/motor/edit/{id}',[MotorsController::class,'edit']);
Route::put('/motor/update/{id}',[MotorsController::class,'update']);
Route::get('/motor/destroy/{id}',[MotorsController::class,'destroy']);

// Transaksi
Route::get('/transaction',[TransactionsController::class,'index']);
Route::get('/transaction/destroy/{id}',[TransactionsController::class,'destroy']);

  // });