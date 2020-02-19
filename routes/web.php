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

Route::get('/adminlte', function () {
    return view('home');
});


Route::get('corporation/users', function() {
    var_dump(((array) DB::select('SELECT database();')[0])['users()']);
});

Route::get('/corporation/admin', 'CorporationController@admin')->name('corporations.admin')->middleware('auth');



Route::get('/corporation/selectdelivery', 'CorporationController@selectDelivery')->name('corporations.selectdelivery')->middleware('auth');


Route::get('/corporations/index', 'CorporationController@index')->name('corporations.index')->middleware('auth');


//Route::post('/corporation/index', 'CorporationController@backToList')->name('corporations.index');
Route::get('/corporations/show/{id}', 'CorporationController@show');



Route::get('/corporations/create', 'CorporationController@create')->name('corporations.create')->middleware('auth');
Route::post('/corporations/create', 'CorporationController@store')->name('corporations.store');


Route::get('/corporation/edit{id}', 'CorporationController@edit')->name('corporations.edit')->middleware('auth');
Route::post('/corporation/edit{id}', 'CorporationController@update')->name('corporations.update');

Route::post('/corporation/delete{id}/', 'CorporationController@delete')->name('corporations.delete'); 

Route::get('/corporation/validation', function(){
    return view('corporations.validation');
});




Route::get('/item/index', 'ItemController@index')->name('item.index')->middleware('auth');

Route::get('/item/add', 'ItemController@create')->name('item.add')->middleware('auth');
Route::post('/item/add', 'ItemController@store')->name('corporations.store');


Route::post('/item/index', 'ItemController@chooseQuantity');

Route::post('/delveryitems/index', 'DeliveryItemController@index');



Route::get('/sales/index', function () {
    return view('sales.index');
})->name('sales.index')->middleware('auth');


Route::get('/sales/create', function () {
    return view('sales.create');
})->name('sales.create')->middleware('auth');










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