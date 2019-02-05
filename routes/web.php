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

Route::get('/create', 'testcontroller@create');

Route::post('/', 'testcontroller@store');

Route::patch('/{test}', 'testcontroller@update');

Route::delete('/{test}', 'testcontroller@destroy');

Route::get('/{test}/edit', 'testcontroller@edit');

Route::get('/{test}', 'testcontroller@show');
