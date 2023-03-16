<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CompanyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginuser',[CompanyController::class,'login'])->name('login');
Route::post('/postlogin',[CompanyController::class,'postlogin']);
Route::get('/logout',[CompanyController::class,'logout']);

//landing page
Route::get('/rental',[CompanyController::class,'landing']);
Route::group(['middleware'=>'auth'],function(){

    Route::get('/rental/order/{id}',[CompanyController::class,'order']);
    Route::post('rental/postorder',[CompanyController::class,'postorder']);
});