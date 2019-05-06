<?php

use Illuminate\Support\Facades\Route;
use Laravel\Telescope\Http\Controllers\HomeController;

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

Route::get('/booking','BookingController@booking');
Route::post('/booking','BookingController@index');
Route::get('/extras','BookingController@extras');
Route::post('/extras','BookingController@step2');
Route::get('/vehicles/{id}','BookingController@step1');
Route::get('/personalinfo','BookingController@personalInfo');
Route::post('/final','BookingController@stepfin');
Route::get('/aboutUs','BookingController@aboutUs');
Route::get('/rentalConditions','BookingController@rentalConditions');

Auth::routes([
    'register'=>false,
    'reset'=>false
]);


Route::group(['middleware'=>'auth'],function(){    

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/addCar','HomeController@addCar');
    Route::post('/home/addCar','HomeController@storeCar');
    Route::get('/home/listCar','HomeController@showCar');
    Route::delete('/home/listCar/{id}','HomeController@destroyCar');
    Route::get('/home/listCar/{id}','HomeController@editCar');
    Route::put('/home/listCar/{id}','HomeController@updateCar');
    Route::get('/home/listReq','HomeController@reqlist');
    Route::post('/home/listReq/deny/{id}','HomeController@deny');
    Route::post('/home/listReq/approved/{id}','HomeController@approved');
    Route::post('/home/listReq/returned/{id}','HomeController@returned');    
    Route::get('/home/listReq/detailedInfo/{id}','HomeController@detailedview');
    Route::get('/settings','AdminSettings@settings');
    Route::post("/home",'AdminSettings@adminSetup');
});


