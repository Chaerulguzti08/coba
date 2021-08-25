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

route::get('/index','App\Http\Controllers\c_index@index');
route::get('/tambah','App\Http\Controllers\c_index@tambah');
route::post('/tambah_data','App\Http\Controllers\c_index@tambah_data');
route::get('/hapus/{id}','App\Http\Controllers\c_index@hapus_data');
route::get('/ubah/{id}','App\Http\Controllers\c_index@ubah');
route::post('/ubah_data','App\Http\Controllers\c_index@ubah_data');
route::get('/cari','App\Http\Controllers\c_index@cari');