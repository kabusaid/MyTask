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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');



Route::resource('tasks', 'TasksController');

Route::get('/dashboard', function(){
    $tasks = \App\Task::get()->take(3);
    return view('dashboard' , compact('tasks'));
});