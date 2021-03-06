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
Route::post('/blog/{id}/delete', 'PostsController@destroy');

Route::get('/calendar', 'CalendarController@index');
Route::get('/calendar/events', 'CalendarController@events');
Route::post('/calendar', 'CalendarController@store');
Route::get('/calendar/{event}', 'CalendarController@show');
Route::get('/calendar/create', 'CalendarController@create');
Route::get('/admin/calendar/edit/{id}', 'CalendarController@edit');
Route::post('/admin/calendar/update/{id}', 'CalendarController@update');
Route::post('/admin/calendar/delete/{id}', 'CalendarController@destroy');

Route::get('/forum', 'ForumQuestionsController@index');
Route::get('/forum/{question}', 'ForumQuestionsController@show');
Route::get('/forum/create', 'ForumQuestionsController@create');
Route::post('/forum', 'ForumQuestionsController@store');
Route::get('/forum/{question}/edit', 'ForumQuestionsController@edit');
Route::post('/forum/{id}/update', 'ForumQuestionsController@update');
Route::post('/forum/{id}/delete', 'ForumQuestionsController@destroy');

Route::post('/forum/answer', 'ForumAnswersController@store');
Route::post('/forum/answer/{id}/update', 'ForumAnswersController@update');
Route::post('/forum/answer/{id}/delete', 'ForumAnswersController@destroy');

Route::get('/forum/answer/{ansid}/{qid}', 'ForumAnswersController@markAnswer');
Route::get('/forum/answer/{ansid}/{qid}/unmark', 'ForumAnswersController@unmarkAnswer');


Route::get('/puzzles', 'PuzzlesController@index');
Route::get('/puzzles/random', 'PuzzlesController@random');
Route::get('/puzzles/create', 'PuzzlesController@create');

Route::get('/puzzles/contests', 'ContestController@puzzles');
Route::get('/puzzles/contest/{contest}', 'ContestController@puzzle');

Route::get('/puzzles/{puzzle}', 'PuzzlesController@show');
Route::post('/puzzles', 'PuzzlesController@store');
Route::get('/admin/puzzles/edit/{puzzle}', 'PuzzlesController@edit');
Route::post('/admin/puzzles/update/{puzzle}', 'PuzzlesController@update');
Route::post('/admin/puzzles/delete/{puzzle}', 'PuzzlesController@destroy');


Route::get('/books', 'BooksController@index');
Route::get('/books/create', 'BooksController@create');
Route::get('/books/{book}', 'BooksController@show');
Route::post('/books', 'BooksController@store');
Route::get('/admin/books/edit/{book}', 'BooksController@edit');
Route::post('/admin/books/update/{book}', 'BooksController@update');
Route::post('/admin/books/delete/{book}e', 'BooksController@destroy');



Route::get('/quiz', 'QuizzesController@index');
Route::get('/quiz/random', 'QuizzesController@random');
Route::get('/quiz/create', 'QuizzesController@create');
Route::get('/quiz/{quiz}', 'QuizzesController@show');
Route::post('/quiz', 'QuizzesController@store');
Route::get('/admin/quiz/edit/{quiz}', 'QuizzesController@edit');
Route::post('/admin/quiz/update/{quiz}', 'QuizzesController@update');
Route::post('/admin/quiz/delete/{quiz}', 'QuizzesController@destroy');
Route::get('/quiz/{quiz}/result', 'QuizzesController@result');

Route::post('/quiz/questions', 'QuizQuestionsController@store');
Route::post('/quiz/questions/{id}/update', 'QuizQuestionsController@update');
Route::post('/quiz/questions/{id}/delete', 'QuizQuestionsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/user/edit', 'ProfileController@edit');


Route::get('/profile/{username}', 'ProfileController@index');


Route::post('/profile/photo', 'ProfileController@updatePhoto');
Route::post('/profile/photo/remove', 'ProfileController@removePhoto');

Route::post('/profile/update', 'ProfileController@update');


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

Route::post('user/game/stats', 'GamesController@stats');


Route::get('leaderboard', 'LeaderboardController@index');






Route::get('/admin/home', 'AdminController@dashboard');

Route::get('/admin/users', 'AdminController@users');

Route::get('/admin/users/delete/{id}', 'AdminController@deleteUser');


Route::get('/admin/calendar', 'CalendarController@admin');
Route::post('/admin/calendar/store', 'CalendarController@store');
Route::get('/admin/calendar/edit/{event}', 'CalendarController@edit');
Route::post('/admin/calendar/update/{event}', 'CalendarController@update');
Route::get('/admin/calendar/delete/{event}', 'CalendarController@destroy');

Route::get('/admin/books', 'BooksController@admin');
Route::post('/admin/books/store', 'BooksController@store');
Route::get('/admin/books/edit/{book}', 'BooksController@edit');
Route::post('/admin/books/update/{book}', 'BooksController@update');
Route::get('/admin/books/delete/{book}', 'BooksController@destroy');

Route::get('/admin/blog', 'PostsController@admin');
Route::get('/admin/blog/new', 'PostsController@create');
Route::post('/admin/blog/store', 'PostsController@store');
Route::get('/admin/blog/edit/{id}', 'PostsController@edit');
Route::post('/admin/blog/update/{id}', 'PostsController@update');
Route::get('/admin/blog/delete/{id}', 'PostsController@destroy');

Route::get('/admin/quiz/list', 'QuizzesController@admin');
Route::get('/admin/quiz/new', 'QuizzesController@create');
Route::post('/admin/quiz/store', 'QuizzesController@store');
Route::get('/admin/quiz/edit/{quiz}', 'QuizzesController@edit');
Route::post('/admin/quiz/update/{quiz}', 'QuizzesController@update');
Route::get('/admin/quiz/delete/{quiz}', 'QuizzesController@destroy');
Route::get('/admin/quiz/events/list', 'QuizzesController@events');
Route::get('/admin/quiz/events/new', 'QuizzesController@createEvent');
Route::post('/admin/quiz/events/store', 'QuizzesController@storeEvent');
Route::get('/admin/quiz/events/edit/{id}', 'QuizzesController@editEvent');
Route::post('/admin/quiz/events/update/{id}', 'QuizzesController@updateEvent');
Route::get('/admin/quiz/events/delete/{id}', 'QuizzesController@deleteEvent');
Route::post('/admin/quiz/question/store', 'QuizQuestionsController@store');
Route::get('/admin/quiz/question/edit/{id}', 'QuizQuestionsController@edit');
Route::post('/admin/quiz/question/update/{id}', 'QuizQuestionsController@update');
Route::get('/admin/quiz/question/delete/{id}', 'QuizQuestionsController@destroy');

Route::get('/admin/puzzles/list', 'PuzzlesController@admin');
Route::get('/admin/puzzles/new', 'PuzzlesController@create');
Route::post('/admin/puzzles/store', 'PuzzlesController@store');
Route::get('/admin/puzzles/edit/{puzzle}', 'PuzzlesController@edit');
Route::post('/admin/puzzles/update/{puzzle}', 'PuzzlesController@update');
Route::get('/admin/puzzles/delete/{puzzle}', 'PuzzlesController@destroy');
Route::get('/admin/puzzles/events/list', 'PuzzlesController@events');
Route::get('/admin/puzzles/events/new', 'PuzzlesController@createEvent');
Route::post('/admin/puzzles/events/store', 'PuzzlesController@storeEvent');
Route::get('/admin/puzzles/events/edit/{id}', 'PuzzlesController@editEvent');
Route::post('/admin/puzzles/events/update/{id}', 'PuzzlesController@updateEvent');
Route::get('/admin/puzzles/events/delete/{id}', 'PuzzlesController@deleteEvent');


// Login Page
Route::get('/admin/login', 'LoginController@showLogin');
Route::post('/admin/login', 'LoginController@postLogin');


Route::get('/game/computer', 'GamesController@computer');


Route::get('/results', 'ResultsController@index');

Route::get('/admin/results', 'ResultsController@adminResults');
Route::post('/admin/results', 'ResultsController@store');
Route::get('/admin/results/edit/{result}', 'ResultsController@edit');
Route::post('/admin/results/{result}', 'ResultsController@update');
Route::get('/admin/results/delete/{result}', 'ResultsController@destroy');

Route::post('/image/upload', 'ImageController@upload');
