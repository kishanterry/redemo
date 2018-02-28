<?php

Route::get('/projects', 'ProjectsController@index')->name('projects.index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
