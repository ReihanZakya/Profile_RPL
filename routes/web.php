<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@home');

Route::get('/RPL/mata_pelajaran','Mata_PelajaranController@index');

Route::get('/RPL/guru','GuruController@index');

Route::get('/RPL/contact','ContactController@index');
Route::post('/RPL/contact','ContactController@kirim_pesan');

Route::get('RPL/portfolio','PortfolioController@index');

Route::get('RPL/dokumentasi','DokumentasiController@index');

Route::get('RPL/peluang_kerja','PeluangKerjaController@index');

Route::get('RPL/berita','BeritaController@index');

Route::get('RPL/berita1','Berita1Controller@index');

Route::get('RPL/berita2','Berita2Controller@index');

Route::get('RPL/berita3','Berita3Controller@index');
    



