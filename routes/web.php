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

Route::get('/calendar', 'CalendarController@index');
Route::post('/calendar', 'CalendarController@store');
Route::get('/calendar/{event}', 'CalendarController@show');
Route::get('/calendar/create', 'CalendarController@create');
Route::get('/calendar/{id}/edit', 'CalendarController@edit');
Route::post('/calendar/{id}/update', 'CalendarController@update');
Route::post('/calendar/{id}/delete', 'CalendarController@delete');

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

Route::get('/books', 'BooksController@index');
Route::get('/books/create', 'BooksController@create');
Route::get('/books/{book}', 'BooksController@show');
Route::post('/books', 'BooksController@store');
Route::get('/books/{book}/edit', 'BooksController@edit');
Route::post('/books/{book}/update', 'BooksController@update');
Route::post('/books/{book}/delete', 'BooksController@delete');



Route::get('/quiz', 'QuizzesController@index');
Route::get('/quiz/random', 'QuizzesController@random');
Route::get('/quiz/create', 'QuizzesController@create');
Route::get('/quiz/{quiz}', 'QuizzesController@show');
Route::post('/quiz', 'QuizzesController@store');
Route::get('/quiz/{quiz}/edit', 'QuizzesController@edit');
Route::post('/quiz/{quiz}/update', 'QuizzesController@update');
Route::post('/quiz/{quiz}/delete', 'QuizzesController@delete');
Route::get('/quiz/{quiz}/result', 'QuizzesController@result');

Route::post('/quiz/questions', 'QuizQuestionsController@store');
Route::post('/quiz/questions/{id}/update', 'QuizQuestionsController@update');
Route::post('/quiz/questions/{id}/delete', 'QuizQuestionsController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/user/edit', 'ProfileController@edit');




/* AXIOS ROUTES */
Route::post('/user/puzzles', 'ProfileController@updatePuzzles');
Route::get('/user/puzzles', 'ProfileController@solvedPuzzles');
Route::post('/user/challenge', 'ProfileController@challengeUser');


Route::post('/profile/puzzle/save', 'ProfileController@savePuzzle');
Route::post('/profile/puzzle/unsave', 'ProfileController@unsavePuzzle');

Route::post('/user/quizzes', 'ProfileController@updateQuizzes');
Route::get('/user/quizzes', 'ProfileController@solvedQuizzes');
Route::post('/user/challenge', 'ProfileController@challengeUser');


Route::post('/profile/quiz/save', 'ProfileController@saveQuiz');
Route::post('/profile/quiz/unsave', 'ProfileController@unsaveQuiz');



Route::post('/buy/coins', 'PaymentsController@makePayment');
Route::get('/payments/response', 'PaymentsController@response');
Route::get('/payments/cancel', 'PaymentsController@cancel');


