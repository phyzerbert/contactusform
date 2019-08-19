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
    return view('membership');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/membership', function () {
    return view('membership');
});
Route::post('/membership', 'IndexController@membership')->name('membership');
Route::get('/testpdf', 'IndexController@testpdf')->name('testpdf');
