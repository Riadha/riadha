<?php

Route::get('/', 'WelcomeController@index');

Auth::routes();

/**
 * Profile
 */
Route::get('/athlete/{country}/{id}/{name}', 'ProfileController@show');

/**
 * Admin Routes
 *
 */
Route::post('/admin/v1/profiles','Admin\ProfileController@store')
    ->name('profiles.store')
    ->middleware(['auth','admin']);

Route::get('/admin/v1/profiles','Admin\ProfileController@index')
    ->name('profiles.index')
    ->middleware(['auth','admin']);

/**
 * Admin SPA
 */
Route::get('/admin', 'AdminController@index')
    ->where('any', '.*')
    ->middleware(['auth','admin']);

Route::get('/admin/{any}', 'AdminController@index')
    ->where('any', '.*')
    ->middleware(['auth','admin']);

Route::get('/my/account', 'HomeController@index')->name('home');
