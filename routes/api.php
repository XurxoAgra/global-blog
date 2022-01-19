<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* ------------------- PLUBLIC API ROUTES ------------------- */

Route::get('/posts',  'App\Http\Controllers\Api\PostController@index')->name('api.post.index');
Route::post('/posts', 'App\Http\Controllers\Api\PostController@store')->name('api.post.store');

/* ------------------- END PUBLIC API ROUTES ------------------- */


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
