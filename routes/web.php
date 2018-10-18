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
Route::get('/lectures', 'LecturesController@index')->name('lectures.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
