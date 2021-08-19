<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index');
Route::get('/RPL/team','TeamController@index');
Route::get('/RPL/contact','ContactController@index');
Route::post('/RPL/contact','ContactController@kirim_pesan');
Route::get('RPL/portfolio','PortfolioController@index');
Route::get('RPL/peluang_kerja','PeluangKerjaController@index');
Route::get('RPL/tujuan','TujuanController@index');
