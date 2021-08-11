<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index');
Route::get('/RPL/fasilitas','FasilitasController@index');
Route::get('/RPL/team','TeamController@index');
Route::get('/RPL/kontak','KontakController@index');
