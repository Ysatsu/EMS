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

Route::get('/', 'PagesController@home');
Route::post('/', 'PagesController@store');
Route::get('/detail/{employee_id?}', 'PagesController@detail');
Route::get('/edit/{employee_id?}', 'PagesController@edit');
Route::post('/edit/{employee_id?}', 'PagesController@doEdit');
Route::get('/delete/{employee_id?}', 'PagesController@delete');
Route::post('/delete/{employee_id?}', 'PagesController@doDelete');
Route::get('/new', 'PagesController@new');
Route::get('/done', 'PagesController@done');
