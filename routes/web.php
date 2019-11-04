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
//課題３「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。

Route::get('XXX', 'XXX\AAAController@bbb');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
      
     //課題12-2,12-3

      Route::get('profile/create', 'Admin\ProfileController@add');
     //課題13-3
      Route::post('profile/create', 'Admin\ProfileController@create');
      Route::get('profile/edit', 'Admin\ProfileController@edit');
      //課題13-6
      Route::post('profile/edit', 'Admin\ProfileController@update');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
