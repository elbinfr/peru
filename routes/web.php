<?php

Route::get('/', 'HomeController@index');

Route::get('files', 'FileController@index')->name('file');
Route::post('files', 'FileController@upload')->name('file');
