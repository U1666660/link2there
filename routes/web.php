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



Route::group(['middleware' => ['web']], function () {

Route::get('/', 'PagesController@getRecommend');
Route::get('recommend', 'PagesController@getRecommend');
Route::get('news', 'PagesController@getNews');
Route::get('videos', 'PagesController@getVideos');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::get('listview', 'PagesController@getListview');
Route::get('map', 'PagesController@getMap');

});
