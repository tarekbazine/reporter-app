<?php


Route::get('/', 'StatisticsController@show' )->name('home');

Route::get('/reports/create', 'ReportsController@create');

Route::post('/reports', 'ReportsController@store');

Route::get('/reports', 'ReportsController@index');

Route::get('/reports/{report}', 'ReportsController@show');

Route::get('/statistics', 'StatisticsController@index');

Route::get('/notes/{status}', 'NotesController@show');

Route::put('/notes/{note}', 'NotesController@update');





