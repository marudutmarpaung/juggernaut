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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('project', 'ProjectController@index')->name('projects.index');
Route::get('project/create', 'ProjectController@create')->name('projects.create');
Route::post('project/store', 'ProjectController@store')->name('projects.store');
Route::get('project/{id}', 'ProjectController@edit')->name('projects.edit');
Route::delete('project/{id}', 'ProjectController@destroy')->name('projects.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
