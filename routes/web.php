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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/blog', 'PostsController@index');
Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/{id}/edit', 'PostsController@edit');
Route::post('/posts/{post}', 'PostsController@update');


Route::get('/courses', 'CoursesController@index');
Route::post('/courses', 'CoursesController@store');
Route::get('/courses/create', 'CoursesController@create');
Route::get('/courses/{post}', 'CoursesController@show');
Route::get('/courses/{id}/edit', 'CoursesController@edit');
Route::post('/courses/{post}', 'CoursesController@update');

Route::get('/videos', 'VideosController@index');
Route::post('/videos', 'VideosController@store');
Route::get('/videos/create', 'VideosController@create');
Route::get('/videos/{post}', 'VideosController@show');
Route::get('/videos/{id}/edit', 'VideosController@edit');
Route::post('/videos/{post}', 'VideosController@update');

Auth::routes();

Route::get('/home', 'HomeController@index');
