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
    return view('pages.recommend');
});

Route::group(['middleware' => ['web']], function () {

Route::get('Recommend', 'PagesController@getRecommend');
Route::get('News', 'PagesController@getNews');
Route::get('Videos', 'PagesController@getVideos');
Route::get('Test', 'PagesController@getTest');
Route::get('About', 'PagesController@getAbout');
Route::get('Listview', 'PagesController@getListview');

});
