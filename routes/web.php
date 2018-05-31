<?php

Route::patch('/projects/{project}', 'ProjectsController@update')->name('projects.update')->middleware('auth');
Route::post('/projects', 'ProjectsController@store')->name('projects.store')->middleware('auth');
Route::get('/projects/{project}', 'ProjectsController@edit')->name('projects.edit')->middleware('auth');
Route::get('/projects/create', 'ProjectsController@create')->name('projects.create')->middleware('auth');
Route::get('/projects', 'ProjectsController@index')->name('projects.index')->middleware('auth');

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
