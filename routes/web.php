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
    return view('welcome');
});

Auth::routes();

Route::get('verifyOTP','VerifyOTPController@showOTPVerificationPage');
Route::post('verifyOTP','VerifyOTPController@verify')->name('verifyOTP');

Route::group(['middleware'=>'VerifyEmail'],function (){

    Route::get('/home', 'HomeController@index')->name('home');

});


