<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('tasks', "api\TaskController@index");
Route::get('task/{id}', "api\TaskController@show");
Route::post('task', "api\TaskController@store");
Route::put('task/{id}', "api\TaskController@update");
Route::delete('task/{id}', "api\TaskController@delete");
