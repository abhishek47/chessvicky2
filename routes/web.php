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
Route::get('/features', 'PagesController@features');
Route::get('/contact', 'PagesController@contact');

Route::get('/blog', 'PostsController@index');
Route::post('/blog', 'PostsController@store');
Route::get('/blog/{post}', 'PostsController@show');
Route::get('/blog/create', 'PostsController@create');
Route::get('/blog/{id}/edit', 'PostsController@edit');
Route::post('/blog/{id}/update', 'PostsController@update');
Route::post('/blog/{id}/delete', 'PostsController@delete');


Route::get('/forum', 'ForumQuestionsController@index');
Route::get('/forum/{question}', 'ForumQuestionsController@show');
Route::get('/forum/create', 'ForumQuestionsController@create');
Route::post('/forum', 'ForumQuestionsController@store');
Route::get('/forum/{question}/edit', 'ForumQuestionsController@edit');
Route::post('/forum/{id}/update', 'ForumQuestionsController@update');
Route::post('/forum/{id}/delete', 'ForumQuestionsController@delete');

Route::post('/forum/answer', 'ForumAnswersController@store');
Route::post('/forum/answer/{id}/update', 'ForumAnswersController@update');
Route::post('/forum/answer/{id}/delete', 'ForumAnswersController@delete');


Route::get('/puzzles', 'PuzzlesController@index');
Route::get('/puzzles/random', 'PuzzlesController@random');
Route::get('/puzzles/create', 'PuzzlesController@create');
Route::get('/puzzles/{puzzle}', 'PuzzlesController@show');
Route::post('/puzzles', 'PuzzlesController@store');
Route::get('/puzzles/{puzzle}/edit', 'PuzzlesController@edit');
Route::post('/puzzles/{puzzle}/update', 'PuzzlesController@update');
Route::post('/puzzles/{puzzle}/delete', 'PuzzlesController@delete');



Route::get('/quiz', 'QuizzesController@index');
Route::get('/quiz/create', 'QuizzesController@create');
Route::get('/quiz/{quiz}', 'QuizzesController@show');
Route::post('/quiz', 'QuizzesController@store');
Route::get('/quiz/{quiz}/edit', 'QuizzesController@edit');
Route::post('/quiz/{quiz}/update', 'QuizzesController@update');
Route::post('/quiz/{quiz}/delete', 'QuizzesController@delete');

Route::post('/quiz/questions', 'QuizQuestionsController@store');
Route::post('/quiz/questions/{id}/update', 'QuizQuestionsController@update');
Route::post('/quiz/questions/{id}/delete', 'QuizQuestionsController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index');
