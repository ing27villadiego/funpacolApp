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

Route::get('/user', function (Request $request) {
    return ['user'=>'ing jeaffer'];
});


Route::get('cities/{slug}/{id}', ['as' => 'city', 'uses' => 'process\CitiesController@zone']);