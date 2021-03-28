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



Route::get('/', 'HomeController@home');


Route::get('/data-tables', 'AuthController@data');

Route::get('/', function(){
    return view('task13.taskTable');
});

Route::get('/data-table', function(){
    return view('task13.dataTable');
});