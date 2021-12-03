<?php

/*
|--------------------------------------------------------------------------
| Simple Note
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', 'NoteController@index');
Route::get('notes/{note}', 'NoteController@show');
Route::get('new-note', 'NoteController@create');
Route::post('store-note', 'NoteController@store');
