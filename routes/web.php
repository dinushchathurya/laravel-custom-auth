<?php

use Illuminate\Support\Facades\Route;

/*  Show Register Page & Login Page */

Route::get('/login','LoginController@show')->name('login')->middleware('guest');
Route::get('/register','RegistrationController@show')->name('register')->middleware('guest');

/* Register & Login User */

Route::post('/login','LoginController@authenticate');
Route::post('/register','RegistrationController@register');

/* Protected Routes - allows only logged in users */

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::post('/logout', 'LoginController@logout');
    Route::post('/user', 'DashboardController@create');
});
