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

/**
 * Admin Routes
 *
 */
Route::post('/admin/v1/profiles','Admin\ProfileController@store')
    ->name('profiles.store')
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
