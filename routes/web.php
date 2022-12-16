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

Route::group(['prefix' => 'admin'], function() {
    // Route::get('tennisreserve/create', 'Admin\TennisreserveController@add');
    Route::get('top', 'Admin\TopController@index')->middleware('auth');
    Route::get('top/login', 'Admin\TopController@login')->middleware('auth');
    Route::get('top/signup', 'Admin\TopController@signup')->middleware('auth');
    
    Route::get('availability', 'Admin\AvailabilityController@index')->middleware('auth');
    Route::get('availability/delete', 'Admin\AvailabilityController@delete')->middleware('auth');
    Route::post('availability/add', 'Admin\AvailabilityController@add')->middleware('auth');
    
    Route::get('mypage', 'Admin\MypageController@index')->middleware('auth');
    Route::get('mypage/add', 'Admin\MypageController@add')->middleware('auth');
    
    // Route::get('signup', 'Admin\SignupController@index')->middleware('auth');
    // Route::get('signup/signup', 'Admin\SignupController@signup')->middleware('auth');
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
