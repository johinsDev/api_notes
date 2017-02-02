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

Route::get('/name', function (Request $request) {
    return \App\User::first()->name;
});

Route::group(['prefix' => 'v1' , 'namespace' => 'Api'], function (){
    Route::resource('notes' , 'NoteController' , [
        'only' => ['index' , 'show' , 'update' , 'delete' , 'store']
    ]);
});
