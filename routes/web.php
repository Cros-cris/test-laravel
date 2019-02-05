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


//Route::resource('/', 'testcontroller')

Route::get('/', 'testcontroller@home');

Route::get('/contact', 'testcontroller@contact');

Route::get('/about', 'testcontroller@about');

Route::get('/test/create', 'testcontroller@create');

Route::post('/test', 'testcontroller@store');

Route::patch('/test/{test}', 'testcontroller@update');

Route::delete('/test/{test}', 'testcontroller@destroy');

Route::get('/test/{test}/edit', 'testcontroller@edit');

Route::get('/test/{test}', 'testcontroller@show');

Route::get('/test','testcontroller@index');
