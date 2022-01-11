<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@HomeIndex');
Route::post('/contactSend', 'HomeController@ContactSend');

Route::get('/Courses', 'CoursesController@CoursePage');
Route::get('/Policy', 'PolicyController@PolicyPage');
Route::get('/Projects', 'ProjectsController@ProjectsPage');
Route::get('/Terms', 'TermsController@TermsPage');
Route::get('/Contact', 'ContactController@ContactPage');
