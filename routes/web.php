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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\PostController@index')->middleware('auth');
//create data posts Table
Route::get('/add-post','App\Http\Controllers\PostController@create'); 
//Store data posts table
Route::post('/add-post','App\Http\Controllers\PostController@store');
//load data from posts table
Route::get('/edit-post/{post}','App\Http\Controllers\PostController@edit');
//update data for posts Table
Route::post('/edit-post2/{post}','App\Http\Controllers\PostController@update');
//delete data from posts Table
Route::delete('/delete-post/{post}','App\Http\Controllers\PostController@delete');


//path topics Table
Route::get('/topic', 'App\Http\Controllers\TopicController@index');
//create data topics Table
Route::get('/add-topic','App\Http\Controllers\TopicController@create');
//store data topcs Table
Route::post('/add-topic','App\Http\Controllers\TopicController@store');