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

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', 'PageController@dashboard')->name('dashboard');
    Route::post('schedule-sms', 'PageController@scheduleSms')->name('schedule_sms');
    Route::get('DeliveryInfoNotification', 'PageController@deliveryInfoNotification')->name('delivery_info');
});

Auth::routes();
