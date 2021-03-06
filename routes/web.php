<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TasksController@home');
Route::get('tasks/create', 'TasksController@create');
Route::post('tasks', 'TasksController@store');

Route::get ( 'about' , function () { 
	return view ( 'about' ); 
}); 

Route::get ( 'products' , function () { 
	return view ( 'products' ); 
});

Route::get('services', function() {
	return view ('services');
});