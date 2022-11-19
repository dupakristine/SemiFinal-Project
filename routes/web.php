<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'VisitorController@index');
Route::get('/visitors/create', 'VisitorController@create');
Route::post('/visitor/create', 'VisitorController@store');


Route::get('/edit-vis/{visitor}', 'VisitorController@edit');
Route::put('/edit-vis/{visitor}','VisitorController@update');
Route::delete('/delete-vis/{visitor}', 'VisitorController@delete');
Route::get('/delete-vis/{visitor}', 'VisitorController@confirm');
