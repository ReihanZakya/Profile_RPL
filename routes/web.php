<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index');
Route::get('/RPL/fasilitas','FasilitasController@index');
Route::get('/RPL/team','TeamController@index');
Route::get('/RPL/kontak','KontakController@index');
Route::get('RPL/portofolio','PortofolioController@index');
Route::get('RPL/peluang_kerja','PeluangKerjaController@index');
Route::get('RPL/tujuan','TujuanController@index');
