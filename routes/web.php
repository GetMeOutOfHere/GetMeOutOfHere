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
    return view('layouts/main');
});

Route::get('/sms_queue', function () {
    return view('layouts/sms_queue');
});

<<<<<<< HEAD
Route::get('/login', function () {
    return view('layouts/login');
});
=======
Auth::routes();

>>>>>>> 424c71327fdc7ac48ca2358a11ba1516488dc281
