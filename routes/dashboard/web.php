<?php

//RoteForDashboard
Route::prefix('dashboard')->name('dashboard.')->group(function(){

//make rote dashboard.welcome
Route::get('/', 'WelcomeController@index')->name('welcome');

Route::resource('categories', 'CategoryController');

});
