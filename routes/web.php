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

Route::get('/', function () {
    return view('welcome');
});

route::resource('/index','App\Http\Controllers\c_index2');
route::get('/update/{id}','App\Http\Controllers\c_index2@edit');
Route::post('/update_data','App\Http\Controllers\c_index2@update');
Route::get('/delete/{id}','App\Http\Controllers\c_index2@destroy');
