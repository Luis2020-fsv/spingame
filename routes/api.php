<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::post('register', 'Auth\RegisterController@registerApi');
Route::get('hello-world', function(){
    return ('Hello World!');
});
Route::post('login', 'Auth\LoginController@login_api');
Route::post('logout', 'Auth\LoginController@logout');

Route::middleware('user_accessible')
    ->get('user', function () {
        return "user data, ok!";
    });

Route::group(['middleware' => ['auth:api', 'user_accessible']], function() { 
    Route::get('home', 'WelcomeController@index_api');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');
});         