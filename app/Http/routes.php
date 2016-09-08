<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages/home');
});

//Route::get('register',function(){
//    return view('pages/register');
//});

Route::get('register','UserController@create');
Route::post('register', 'UserController@store');
Route::get('login','UserController@login')->name('login');
Route::get('logout', 'UserController@logout')->name('logout');
Route::post('login','UserController@postLogin')->name('postLogin');
Route::get('profile','UserController@profile')->name('profile');
