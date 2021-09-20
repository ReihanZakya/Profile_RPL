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

// Route::get('RPL/tujuan','TujuanController@index');


//-------------------------------Backend--------------------------------//


//Dashboard
Route::group(['middleware' => ['auth','verified']],function(){
    Route::get('dashboard','DashboardController@index');
});



// admin
Route::group(['middleware' => ['auth','verified','role:admin']],function(){
    //Dashboard Admin
    Route::get('/dashboard','Admin\AdminController@index');

    //Manage Mata Pelajaran
    Route::get('subject','Admin\SubjectController@index');
    Route::get('subject/add_subject','Admin\SubjectController@add');
    Route::post('subject/store','Admin\SubjectController@store');
    Route::get('subject/{id}/edit','Admin\SubjectController@edit');
    Route::put('subject/{id}/update','Admin\SubjectController@update');
    Route::get('subject/{id}/delete','Admin\SubjectController@delete');

    //Manage Guru
    Route::get('teacher','Admin\TeacherController@index');
    Route::get('teacher/add_teacher','Admin\TeacherController@add');
    Route::post('teacher/store','Admin\TeacherController@store');
    Route::get('teacher/{id}/edit','Admin\TeacherController@edit');
    Route::put('teacher/{id}/update','Admin\TeacherController@update');
    Route::get('teacher/{id}/delete','Admin\TeacherController@delete');

    //Manage Guru Mapel
    Route::get('teacher_subject','Admin\TeacherSubjectController@index');
    Route::get('teacher_subject/add_teacher_subject','Admin\TeacherSubjectController@add');
    Route::post('teacher_subject/store','Admin\TeacherSubjectController@store');
    Route::get('teacher_subject/{id}/edit','Admin\TeacherSubjectController@edit');
    Route::put('teacher_subject/{id}/update','Admin\TeacherSubjectController@update');


    //Peluang Kerja
    Route::get('job_opportunities','Admin\JobOpportunitiesController@index');
    Route::get('job_opportunities/add_job','Admin\JobOpportunitiesController@add');
    Route::post('job_opportunities/store','Admin\JobOpportunitiesController@store');
    Route::get('job_opportunities/{id}/edit','Admin\JobOpportunitiesController@edit');
    Route::put('job_opportunities/{id}/update','Admin\JobOpportunitiesController@update');



    //Portofolio
    Route::get('portfolio','Admin\PortfolioController@index');
    Route::get('portfolio/add_portfolio','Admin\PortfolioController@add');
    Route::post('portfolio/store','Admin\PortfolioController@store');
    Route::get('portfolio/{id}/edit','Admin\PortfolioController@edit');
    Route::put('portfolio/{id}/update','Admin\PortfolioController@update');


    //Dokumentasi
    Route::get('documentation','Admin\DocumentationController@index');
    Route::get('documentation/add_documentation','Admin\DocumentationController@add');
    Route::post('documentation/store','Admin\DocumentationController@store');
    Route::get('documentation/{id}/edit','Admin\DocumentationController@edit');
    Route::put('documentation/{id}/update','Admin\DocumentationController@update');


    //Berita
    Route::get('news','Admin\NewsController@index');
    Route::get('news/add_news','Admin\NewsController@add');
    Route::post('news/store','Admin\NewsController@store');
    Route::get('news/{id}/edit','Admin\NewsController@edit');
    Route::put('news/{id}/update','Admin\NewsController@update');

});



Route::get('logout',function(){
    Auth::logout();
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
