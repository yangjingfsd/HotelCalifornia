<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HotelController@index')->name('home');

Route::post('/next', 'App\Http\Controllers\HotelController@next')->name('next');

Route::post('/store', 'App\Http\Controllers\HotelController@store')->name('store');

Route::post('/signin', 'App\Http\Controllers\HotelController@signin')->name('signin');

Route::get('/signup', 'App\Http\Controllers\HotelController@signup')->name('signup');

Route::get('/loginreserv', 'App\Http\Controllers\HotelController@loginreserv')->name('loginreserv');

Route::get('/update', 'App\Http\Controllers\HotelController@update')->name('update');

Route::post('/profile/{email}', 'App\Http\Controllers\HotelController@profile')->name('profile');

Route::get('/reserv', function () {
    return view('reserv');
});

Route::get('/login', 'App\Http\Controllers\HotelController@login')->name('login');

Route::get('/logout', 'App\Http\Controllers\HotelController@logout')->name('logout');


Route::get('/galery', function () {
    return view('galery');
});
