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

use Illuminate\Filesystem\Filesystem;

app()->singleton('example', function(){
    return new App\Task;
});

Route::get('/', function(){
    dd(app('example'), app('example'));

    return view('welcome');
});

Route::resource('/projects', 'ProjectController');
Route::resource('/projects/{project}/tasks', 'TaskController');