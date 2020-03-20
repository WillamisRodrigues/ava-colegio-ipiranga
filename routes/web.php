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
    return view('auth.login');
});

Auth::routes();
Route::get('/turmas', ['uses' => 'HomeController@index', 'as' => 'turmas']);
Route::get('/alunos', ['uses' => 'HomeController@alunos', 'as' => 'alunos']);
Route::get('/disciplinas', ['uses' => 'HomeController@disciplinas', 'as' => 'disciplinas']);


