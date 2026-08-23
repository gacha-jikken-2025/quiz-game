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
    return view('welcome');
});

// Route::get('/quiz/{id}', 'App\Http\Controllers\ChoiceController@choice')->name("quiz.question");
Route::get('/quiz/{id}', 'App\Http\Controllers\QuestionController@question')->name("quiz.question");

Route::post('/quiz/{id}/submit', 'App\Http\Controllers\AnswerController@answer')->name("quiz.answer");

Route::get('/result', 'App\Http\Controllers\ResultController@result')->name("result");
