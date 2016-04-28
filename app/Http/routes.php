<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('home', 'HomeController@index');
    Route::resource('messages', 'MessagesController');
    Route::auth();
});
