<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'App\Http\Controllers\Auth\\'],function (){

    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    Route::post('logout', 'LoginController@logout')->name('logout');

    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');

});
