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
    return Redirect::route('web.posts.index');
});

/*
|--------------------------------------------------------------------------
| Web Public Routes Group
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'web'], function(){
    Route::get('/posts', 'App\Http\Controllers\Web\PostController@index')->name('web.posts.index');
    Route::get('/posts/{id}', 'App\Http\Controllers\Web\PostController@show')->name('web.posts.view');
});