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
Route::get('/student/create','StudentsController@create')->name('student.create')->middleware('auth');;
Route::post('/students','StudentsController@store')->name('student.save')->middleware('auth');;
Route::get('/student/{student}/edit','StudentsController@edit')->name('student.edit')->middleware('auth');;
Route::put('/student/{student}','StudentsController@update')->middleware('auth');;
Route::delete('/student/{student}','StudentsController@destroy')->middleware('auth');;



Route::get('/lectures', 'LecturesController@index')->name('lectures.show');
Route::get('lecture/create', 'LecturesController@create')->name('lecture.create')->middleware('auth');;
Route::post('/lectures', 'LecturesController@store')->name('lecture.save')->middleware('auth');;
Route::get('/lecture/{lecture}/edit', 'LecturesController@edit')->name('lecture.edit')->middleware('auth');;
Route::put('lecture/{lecture}', 'LecturesController@update')->middleware('auth');;
Route::delete('lecture/{lecture}','LecturesController@destroy')->middleware('auth');;

Route::get('/grade', 'GradesController@create')->name('grade.create')->middleware('auth');;
Route::post('/grade', 'GradesController@store')->name('grade.save')->middleware('auth');;
Route::get('/student/{student}','GradesController@results');
Route::get('/grade/{grade}','GradesController@edit')->middleware('auth');;
Route::put('/grade/{grade}','GradesController@update')->middleware('auth');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
