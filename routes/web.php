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
