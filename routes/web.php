<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\AkinatorController@partA');
Route::post('/1', 'App\Http\Controllers\AkinatorController@partA');

Route::get('/2', 'App\Http\Controllers\AkinatorController@partB_SI');
Route::post('/22', 'App\Http\Controllers\AkinatorController@partB_SI');

Route::get('/3', 'App\Http\Controllers\AkinatorController@partB_NO');
Route::post('/33', 'App\Http\Controllers\AkinatorController@partB_NO');


//level 2
Route::get('/4', 'App\Http\Controllers\Akinator_level2_Controller@partC_SI');
Route::post('/44', 'App\Http\Controllers\Akinator_level2_Controller@partC_SI');

Route::get('/5', 'App\Http\Controllers\Akinator_level2_Controller@partC_NO');
Route::post('/55', 'App\Http\Controllers\Akinator_level2_Controller@partC_NO');


Route::get('/6', 'App\Http\Controllers\Akinator_level2_Controller@partD_SI');
Route::post('/66', 'App\Http\Controllers\Akinator_level2_Controller@partD_SI');

Route::get('/7', 'App\Http\Controllers\Akinator_level2_Controller@partD_NO');
Route::post('/77', 'App\Http\Controllers\Akinator_level2_Controller@partD_NO');



//Level 3
Route::get('/8', 'App\Http\Controllers\Akinator_level3_Controller@partE_SI');
Route::post('/88', 'App\Http\Controllers\Akinator_level3_Controller@partE_SI');

Route::get('/9', 'App\Http\Controllers\Akinator_level3_Controller@partE_NO');
Route::post('/99', 'App\Http\Controllers\Akinator_level3_Controller@partE_NO');

Route::get('/10', 'App\Http\Controllers\Akinator_level3_Controller@partF_SI');
Route::post('/100', 'App\Http\Controllers\Akinator_level3_Controller@partF_SI');

Route::get('/11', 'App\Http\Controllers\Akinator_level3_Controller@partF_NO');
Route::post('/111', 'App\Http\Controllers\Akinator_level3_Controller@partF_NO');

Route::get('/12', 'App\Http\Controllers\Akinator_level3_Controller@partG_SI');

Route::get('/13', 'App\Http\Controllers\Akinator_level3_Controller@partG_NO');
Route::post('/133', 'App\Http\Controllers\Akinator_level3_Controller@partG_NO');

Route::get('/14', 'App\Http\Controllers\Akinator_level3_Controller@partH_SI');

Route::get('/15', 'App\Http\Controllers\Akinator_level3_Controller@partH_NO');
Route::POST('/155', 'App\Http\Controllers\Akinator_level3_Controller@partH_NO');



//Level 4
Route::get('/16', 'App\Http\Controllers\Akinator_level4_Controller@partI_SI');

Route::get('/17', 'App\Http\Controllers\Akinator_level4_Controller@partI_NO');

Route::get('/18', 'App\Http\Controllers\Akinator_level4_Controller@partJ_SI');

Route::get('/19', 'App\Http\Controllers\Akinator_level4_Controller@partJ_NO');

Route::get('/20', 'App\Http\Controllers\Akinator_level4_Controller@partK_SI');

Route::get('/21', 'App\Http\Controllers\Akinator_level4_Controller@partK_NO');

Route::get('/22', 'App\Http\Controllers\Akinator_level4_Controller@partL_SI');

Route::get('/23', 'App\Http\Controllers\Akinator_level4_Controller@partL_NO');

Route::get('/24', 'App\Http\Controllers\Akinator_level4_Controller@partM_SI');

Route::get('/25', 'App\Http\Controllers\Akinator_level4_Controller@partM_NO');

Route::get('/26', 'App\Http\Controllers\Akinator_level4_Controller@partN_SI');

Route::get('/27', 'App\Http\Controllers\Akinator_level4_Controller@partN_NO');



