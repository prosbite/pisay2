<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::get('dashboard', 'AdminDashboardController@index')->name('admin.dashboard');
    Route::get('students', 'AdminStudentController@index')->name('admin.students');
    Route::get('student/create', 'AdminStudentController@create')->name('admin.student.create');
    Route::post('student/store', 'AdminStudentController@store')->name('admin.student.store');
    Route::get('student/init', 'AdminStudentController@init')->name('admin.student.init');
    Route::get('student/sections', 'AdminStudentController@sections')->name('admin.student.sections');
    Route::get('enrollement', 'AdminEnrollmentController@index')->name('admin.enrollment');

    Route::get('subjects', 'AdminSubjectsController@index')->name('admin.subjects');
    Route::get('subject/create', 'AdminSubjectsController@create')->name('admin.subject.create');
    Route::post('subject/store', 'AdminSubjectsController@store')->name('admin.subject.store');
    Route::get('subject/delete/{id}', 'AdminSubjectsController@destroy')->name('admin.subject.delete');

    Route::get('sections', 'AdminSectionsController@index')->name('admin.sections');
    Route::get('section/create', 'AdminSectionsController@create')->name('admin.section.create');
    Route::post('section/store', 'AdminSectionsController@store')->name('admin.section.store');
    Route::get('section/delete/{id}', 'AdminSectionsController@destroy')->name('admin.section.delete');
});
