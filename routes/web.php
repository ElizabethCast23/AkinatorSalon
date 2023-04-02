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




//level 2
Route::get('/4', 'App\Http\Controllers\Akinator_level2_Controller@partC_SI');
Route::post('/44', 'App\Http\Controllers\Akinator_level2_Controller@partC_SIanswer');

Route::get('/5', 'App\Http\Controllers\Akinator_level2_Controller@partC_NO');
Route::post('/55', 'App\Http\Controllers\Akinator_level2_Controller@partC_NOanswer');


Route::get('/6', 'App\Http\Controllers\Akinator_level2_Controller@partD_SI');
Route::post('/66', 'App\Http\Controllers\Akinator_level2_Controller@partD_SIanswer');

Route::get('/7', 'App\Http\Controllers\Akinator_level2_Controller@partD_NO');
Route::post('/77', 'App\Http\Controllers\Akinator_level2_Controller@partD_NOanswer');



//Level 3
Route::get('/8', 'App\Http\Controllers\Akinator_level3_Controller@partE_SI');
Route::get('/9', 'App\Http\Controllers\Akinator_level3_Controller@partE_NO');

Route::get('/10', 'App\Http\Controllers\Akinator_level3_Controller@partF_SI');
Route::get('/11', 'App\Http\Controllers\Akinator_level3_Controller@partF_NO');

Route::get('/12', 'App\Http\Controllers\Akinator_level3_Controller@partG_SI');
Route::get('/13', 'App\Http\Controllers\Akinator_level3_Controller@partG_NO');

Route::get('/14', 'App\Http\Controllers\Akinator_level3_Controller@partH_SI');
Route::get('/15', 'App\Http\Controllers\Akinator_level3_Controller@partH_NO');



//Level 4



