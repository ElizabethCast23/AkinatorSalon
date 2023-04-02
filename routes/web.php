<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\AkinatorController@partA');
Route::post('/1', 'App\Http\Controllers\AkinatorController@partAanswer');

Route::get('/2', 'App\Http\Controllers\AkinatorController@partB_SI');
Route::post('/2', 'App\Http\Controllers\AkinatorController@partB_SIanswer');

Route::get('/3', 'App\Http\Controllers\AkinatorController@partB_NO');
Route::post('/3', 'App\Http\Controllers\AkinatorController@partB_NOanswer');
