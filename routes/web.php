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
Route::get('/students', 'StudentsController@index')->name('students.show');
Route::get('/student/create','StudentsController@create')->name('student.create');
Route::post('/students','StudentsController@store')->name('student.save');
Route::get('/student/{student}/edit','StudentsController@edit')->name('student.edit');
Route::put('/student/{student}','StudentsController@update');
Route::delete('/student/{student}','StudentsController@destroy');



Route::get('/lectures', 'LecturesController@index')->name('lectures.show');
Route::get('lecture/create', 'LecturesController@create')->name('lecture.create');
Route::post('/lectures', 'LecturesController@store')->name('lecture.save');
Route::get('/lecture/{lecture}/edit', 'LecturesController@edit')->name('lecture.edit');
Route::put('lecture/{lecture}', 'LecturesController@update');
Route::delete('lecture/{lecture}','LecturesController@destroy');

Route::get('/grade', 'GradesController@create')->name('grade.create');
Route::post('/grade', 'GradesController@store')->name('grade.save');
Route::get('/student/{student}','GradesController@results');
Route::get('/grade/{grade}','GradesController@edit');
Route::put('/grade/{grade}','GradesController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
