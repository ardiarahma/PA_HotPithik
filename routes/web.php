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

// Route::get('/', function () {
//     return view('layouts.master');
// });


Route::get('/', 'HomeController@index');

Route::get('/persediaan', function () {
    return view('persediaan');
});
Route::get('/lokasi', function () {
    return view('lokasi');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/logout', 'LoginController@userLogout')->name('master.logout');
