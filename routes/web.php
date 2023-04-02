<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\AkinatorController@partA');
Route::post('/1', 'App\Http\Controllers\AkinatorController@partAanswer');

Route::get('/2', 'App\Http\Controllers\AkinatorController@partB_SI');
Route::post('/22', 'App\Http\Controllers\AkinatorController@partB_SIanswer');

Route::get('/3', 'App\Http\Controllers\AkinatorController@partB_NO');
Route::post('/33', 'App\Http\Controllers\AkinatorController@partB_NOanswer');





Route::get('/4', 'App\Http\Controllers\Akinator_level2_Controller@partC_SI');

Route::get('/5', 'App\Http\Controllers\Akinator_level2_Controller@partC_NO');




Route::get('/6', 'App\Http\Controllers\Akinator_level2_Controller@partD_SI');

Route::get('/7', 'App\Http\Controllers\Akinator_level2_Controller@partD_NO');
