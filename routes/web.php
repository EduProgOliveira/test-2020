<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::resource('cursos','Courses\\CoursesController')->names('course')->parameters(['cursos' => 'course']);

Route::resource('alunos','Student\\StudentsController')->names('student')->parameters(['alunos' => 'student']);

Route::get('delete-student/{student}','Student\\StudentsController@destroy')->name('deletestudent');
Route::get('delete-course/{course}','Courses\\CoursesController@destroy')->name('deletecourse');

Route::get('register-courses/{student}','Courses\\CoursesController@destroy')->name('registercourse');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
