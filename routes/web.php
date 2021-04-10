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
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create',
    'Admin\NewsController@add')->middleware('auth');
     Route::get('profile/create',
    'Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit',
    'Admin\ProfileController@edit')->middleware('auth');
});

//課題３
// Route::get('XXX',
// 'Admin/AAAController@bbb');

Route::get('/', function () {
    return view('welcome');
});

//課題４

// Route::group(['prefix' => 'admin'], function() {
//     Route::get('profile/create',
//     'Admin/ProfileController@add');
//     Route::get('profile/edit',
//     'Admin/ProfileController@edit');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
