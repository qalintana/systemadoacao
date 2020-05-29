<?php

use Illuminate\Support\Facades\Route;




Route::namespace('Site')->name('site.')->group(function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/contacto', 'HomeController@contact')->name('contact');
    Route::post('/contacto', 'ContactController@store')->name('contact.store');
    Route::get('/sobre', 'HomeController@about')->name('about');


    Route::get('/donate', 'DonattController@create')->name('donate.create');
    Route::post('/donate', 'DonattController@store')->name('donate.store');
});


Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {

    Route::get('/messages', 'MessageController@index')->name('message');
    Route::get('/messages/naolida', 'MessageController@messageNaoLida')->name('message.naolida');

    Route::get('/users/donatts', 'DonattController@index')->name('users.donate');
    Route::get('/users/{user}/deposit', 'DepositController@create')->name('deposit.create');
    Route::post('/users/deposit', 'DepositController@store')->name('deposit.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
