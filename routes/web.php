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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/settings/database', 'Pages\Settings\DatabaseController@index')->name('settings_db');
Route::post('/settings/const', 'Pages\Settings\ConstController@index')->name('settings_const');
Route::post('/settings/const2', 'Pages\Settings\Const2Controller@index')->name('settings_const2');
Route::post('/settings/general', 'Pages\Settings\GeneralController@index')->name('settings_general');

Route::post('/sample/wysiwyg/jodit', 'Pages\Sample\Wysiwyg\JoditController@index')->name('sample_wysiwyg_jodit');

