<?php


Route::get('/', 'AdminController@index')->name('admin');

Route::get('/usuario/buscar/', 'UserController@search')->name('user.search');
Route::resource('usuario', 'UserController',
    ['names' => 'user', 'parameters' => ['usuario' => 'user']]
);

Route::get('/country/{country}/categories/', 'CountryController@categories');
Route::resource('pais', 'CountryController',
    ['names' => 'country', 'parameters' => ['pais' => 'country']]
);

Route::resource('categoria', 'CategoryController',
    ['names' => 'category', 'parameters' => ['categoria' => 'category']]
);

Route::resource('archivos', 'FileController',
    ['names' => 'file', 'parameters' => ['archivos' => 'file']]
);

Route::resource('mis-archivos', 'NotebookController',
    ['names' => 'notebook', 'parameters' => ['mis-archivos' => 'notebook']]
);
