<?php

use Illuminate\Support\Facades\Route;

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
});

Route::post('/booking','BookingController@index');
Route::get('/extras/{id}','BookingController@step1');

