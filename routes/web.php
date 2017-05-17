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


Route::group(['prefix'=>'student','middleware'=>'auth'], function(){
    Route::get('/home','StudentController@show_subjects')->name('show_subjects_student');
    Route::post('/insert','StudentController@insert_data')->name('insert_student');
    Route::get('/get_objects','StudentController@get_data_by_evaluations')->name('get_data_eval');
});

Route::group(['prefix'=>'teacher','middleware'=>'auth'],function(){
    Route::get('/home','TeacherController@show_subjects')->name('show_subjects_teacher');
    Route::post('/insert','TeacherController@insert_data')->name('insert_teacher');
    Route::get('/get_subject/{id}','TeacherController@get_subject_by_id')->name('get_sub_by_id');
    Route::get('/get_students','TeacherController@get_students_by_class')->name('get_st_by_class');
    Route::post('/insert_evaluations','TeacherController@insert_evaluations')->name('insert_evaluations');
});




