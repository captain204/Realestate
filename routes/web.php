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

//Route::get('blogs', 'BlogsController1@index');
//Route::get('blogs/{id}','BlogsController1@show');
Route::resource('blogs','BlogsController');
Route::resource('properties','PropertiesController');
Route::resource('home','HomeController');
Route::resource('admin','AdminController');
Route::resource('agent', 'AgentsController');
Route::resource('forum', 'ForumController');

// Custom routes
Route::get('forum/reply/{id}', 'ForumController@reply');
Route::post('forum/reply/forum/postReply', 'ForumController@postReply');
Route::get('mortgages', 'ForumController@mortgages');
Route::get('mortgages_create', 'ForumController@mortgages_create');
Route::get('deals', 'ForumController@deals');
Route::get('deals_create', 'ForumController@deals_create');
Route::get('events', 'ForumController@events');
Route::get('events_create', 'ForumController@events_create');
Route::get('careers', 'ForumController@careers');
Route::get('careers_create', 'ForumController@careers_create');



Auth::routes();

//Route::get('home', 'HomeController@index')->name('home');
