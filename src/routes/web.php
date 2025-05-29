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

// 一覧画面
Route::get('/todo', 'TodoController@index')->name('todo.index');

// 新規追加画面
Route::get('/todo/create', 'TodoController@create')->name('todo.create');
Route::post('/todo', 'TodoController@store')->name('todo.store');

// 詳細画面
Route::get('/todo/{id}', 'TodoController@show')->name('todo.show');
Route::delete('/todo/{id}', 'TodoController@delete')->name('todo.delete');

// 更新画面
Route::get('/todo/{id}/edit', 'TodoController@edit')->name('todo.edit');
Route::put('/todo/{id}', 'TodoController@update')->name('todo.update');