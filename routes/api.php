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
Route::get('/toys/{pagina}/{nombre?}/{cantidad?}', 'ApiController@getToys');
Route::get('/category/{pagina}/{categoria}/{cantidad?}', 'ApiController@getCategory');
Route::get('/category/{categoria}', 'ApiController@getCategory');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
