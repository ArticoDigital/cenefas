<?php


Route::get('/', 'AdminController@index')->name('admin');
Route::resource('usuario', 'UserController', ['names' => 'user','URI' => 'photos']);
