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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    \Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {

        Log::debug($query->sql);
        Log::debug($query->bindings);
        Log::debug($query->time);
    
    });
});
