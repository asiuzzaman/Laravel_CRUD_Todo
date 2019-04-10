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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * 
 * Route::request_method('url', 'controller@controller_method');
 */
Route::get('/todos', 'TodoController@showAll');
Route::post('/todos', 'TodoController@create');
Route::post('/todos/delete','TodoController@delete');
Route::get('/todos/edit/{id}', 'TodoController@editForm');
Route::post('/todos/edit/{id}', 'TodoController@edit');

