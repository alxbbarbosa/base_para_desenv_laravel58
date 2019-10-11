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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::any('roles/search', 'Admin\RoleController@search')->name('roles.search');
    Route::resource('roles','Admin\RoleController');

    Route::resource('users','Admin\UserController');
    Route::any('users/search', 'Admin\UserController@search')->name('users.search');

    Route::get('/profile', 'Admin\UserController@editProfile')->name('profile.edit');
    Route::put('/profile/{id}', 'Admin\UserController@updateProfile')->name('profile.update');
    Route::get('/password', 'Admin\UserController@editPassword')->name('password.edit');
    Route::put('/password/{id}', 'Admin\UserController@updatePassword')->name('password.update');
});
