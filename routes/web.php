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


Route::get('/','HomeController@index');
Route::get('/RPL/fasilitas','FasilitasController@index');
Route::get('/RPL/team','TeamController@index');
Route::get('/RPL/kontak','KontakController@index');
Route::get('RPL/portofolio','PortofolioController@index');
Route::get('RPL/peluang_kerja','PeluangKerjaController@index');
Route::get('RPL/tujuan','TujuanController@index');
