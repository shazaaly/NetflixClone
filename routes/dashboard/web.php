<?php

//RoteForDashboard
Route::prefix('dashboard')
->name('dashboard.')
->middleware(['auth','role:super_admin|admin'])
->group(function(){

//make route dashboard.welcome
Route::get('/', 'WelcomeController@index')->name('welcome');
//make route categories:
Route::resource('categories','CategoryController')->except(['show']);
Route::resource('roles','RoleController')->except(['show']);

});
