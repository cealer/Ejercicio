<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',['as'=>'home','uses'=>'HomeController@index']);

Route::get('teacher/list',['as'=>'teacherList','uses'=>'TeacherController@listTeacher']);

Route::get('teacher/{id}',['as' =>'teacherId','uses'=>'TeacherController@TeacherId']);

Route::get('no',['as'=>'notFound','uses'=>'notFoundController@error']);

Route::get('signup',['as'=>'signUp','uses'=>'TeacherController@SignUp']);

Route::post('signup',['as'=>'register','uses'=>'TeacherController@RegisterTeacher']);