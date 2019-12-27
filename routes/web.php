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




Route::get('/corporation', function () {
    return view('corporation');
});
Route::get('corporation.show', 'CorporationController@show');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
   }) ;