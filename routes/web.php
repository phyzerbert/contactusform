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
Route::get('/freeze', function () {
    return view('freeze');
});
Route::get('/trial', function () {
    return view('trial');
});
Route::get('/cancellation', function () {
    return view('cancellation');
});

Route::post('/membership', 'IndexController@membership')->name('membership');
Route::post('/freeze', 'IndexController@freeze')->name('freeze');
Route::post('/trial', 'IndexController@trial')->name('trial');
Route::post('/cancellation', 'IndexController@cancellation')->name('cancellation');

Route::get('/testpdf', 'IndexController@testpdf')->name('testpdf');
