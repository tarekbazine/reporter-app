<?php


Route::get('/', 'StatisticsController@show' )->name('home');

Route::get('/reports/create', 'ReportsController@create');

Route::post('/reports', 'ReportsController@store');

Route::get('/reports', 'ReportsController@index');

Route::get('/notes/{status}', 'NotesController@show');

Route::put('/notes/{note}', 'NotesController@update');





