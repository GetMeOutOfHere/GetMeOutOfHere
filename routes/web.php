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

Route::post('/deliveryInfo', function(){
    Log::info(json_decode($request->getContent(), true));
    return "True";
})->name('delivery_info');

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', 'PageController@dashboard')->name('dashboard');
    Route::post('schedule-sms', 'PageController@scheduleSms')->name('schedule_sms');

});

Auth::routes();
