<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::post('res','TopController@Res');    // 追加
Route::get('top/{id}', 'TopController@Top');    // 追加
Route::post('top/{id}', 'TopController@Top');    // 追加

