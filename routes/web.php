<?php

Route::post('/projects/store', 'ProjectsController@store')->name('projects.store')->middleware('auth');
Route::get('/projects/create', 'ProjectsController@create')->name('projects.create')->middleware('auth');
Route::get('/projects', 'ProjectsController@index')->name('projects.index')->middleware('auth');

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
