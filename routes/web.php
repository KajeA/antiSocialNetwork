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

Route::get('/posts', 'PostController@store');
Route::get('/profiles/{user:name}', 'ProfilesController@show')->name('profile');

Route::post('/profiles/{user:name}/follow', 'FollowsController@store');
Route::get('/profiles/{user:name}/edit', 'ProfilesController@edit');
Route::post('posts/{post}/like', 'PostLikesController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/explore', 'ExploreController@index');
