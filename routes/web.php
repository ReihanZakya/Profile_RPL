<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@home');

Route::get('/RPL/mata_pelajaran','Mata_PelajaranController@index');

Route::get('/RPL/guru','GuruController@index');

Route::get('/RPL/contact','ContactController@index');
Route::post('/RPL/contact','ContactController@kirim_pesan');

Route::get('RPL/portfolio','PortfolioController@index');

Route::get('RPL/dokumentasi','DokumentasiController@index');

Route::get('RPL/peluang_kerja','PeluangKerjaController@index');
// Route::get('RPL/tujuan','TujuanController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
