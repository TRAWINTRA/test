<?php

//Route::get('/', function () {
//    return view('layout.app');
//});
Route::get('/', 'Controller@home');
Route::get('/home', 'Controller@home');
Route::get('/product', 'Controller@product');
Route::get('/test', 'Controller@test');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/edit', 'HomeController@edit')->name('edit');
    Route::post('/delete','HomeController@destroy')->name('delete');
    Route::post('/add_breads', 'HomeController@insert')->name('add_breads');
    Route::get('admin/product', 'HomeController@product')->name('admin/product');

	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

