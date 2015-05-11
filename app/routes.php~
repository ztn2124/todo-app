<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('task','Task');

Route::get('/', 'TasksController@home');
Route::get('/create', 'TasksController@create');
Route::get('/edit/{task}','TasksController@edit');
Route::get('/delete/{task}', 'TasksController@delete');

Route::post('/create', 'TasksController@saveCreate');
Route::post('/edit', 'TasksController@doEdit');
Route::post('/delete', 'TasksController@doDelete');


