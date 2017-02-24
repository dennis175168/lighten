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

Route::get('/', function () {
    return view('welcome');
});
//index
Route::get('/index','PageController@index');

    Route::get('/signup','PageController@signup');
    Route::get('/signup_wait','PageController@signup_wait');
    Route::get('/signup_finish','PageController@signup_finish');
    Route::post('/user_insert','DbController@user_insert');
Route::get('/detail','PageController@detail');
Route::post('/bor_insert','BoardController@bor_insert');
//gow頁面
Route::get('/current','PageController@current');
Route::get('/all','PageController@all');
Route::get('/transport','PageController@transport');
Route::get('/work','PageController@work');
Route::get('/animals','PageController@animals');
Route::get('/school','PageController@school');
Route::get('/environment','PageController@environment');
Route::get('/finance','PageController@finance');
Route::get('/net','PageController@net');
Route::get('/speech','PageController@speech');
 //按讚
 Route::get('/like','LikeController@like');
 Route::get('/dislike','DislikeController@dislike');
//report頁面
Route::get('/report','PageController@report');
Route::get('/report_transport','PageController@report_transport');
Route::get('/report_work','PageController@report_work');
Route::get('/report_animals','PageController@report_animals');
Route::get('/report_school','PageController@report_school');
Route::get('/report_environment','PageController@report_environment');
Route::get('/report_finance','PageController@report_finance');
Route::get('/report_net','PageController@report_net');
Route::get('/report_speech','PageController@report_speech');
    //report_insert
    Route::post('/insert','DbController@report_insert');
//登入控制
Route::get('login', 'LoginController@show');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');
//寄信
Route::post('mail', 'MailController@getSend');

