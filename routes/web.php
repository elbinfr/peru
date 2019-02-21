<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('files', 'FileController@index')->name('file');
Route::post('files', 'FileController@upload')->name('file');
