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
Route::get('/test', function() { return view('home'); });
Route::get('/catatan', 'KaderController@getCatatanPage');
Route::get('/catatan/tambah', 'KaderController@addCatatan');

Route::get('/register-bayi', 'KaderController@getRegisterBayiPage');
Route::get('/register-bayi/tambah', 'KaderController@addRegisterBayi');
Route::get('/register-bayi/data/{id_bayi}', 'KaderController@getRegisterBayiDataPage');
Route::get('/register-bayi/data/{id_bayi}/tambah', 'KaderController@addRegisterBayiData');

Route::get('/register-wuspus', 'KaderController@getRegisterWuspusPage');
Route::get('/register-wuspus/tambah', 'KaderController@addRegisterWuspus');

Route::get('/register-ibu-hamil', 'KaderController@getRegisterIbuHamilPage');
Route::get('/register-ibu-hamil/tambah', 'KaderController@addRegisterIbuHamil');
Route::get('/register-ibu-hamil/data/{id}', 'KaderController@getRegisterIbuHamilDataPage');
Route::get('/register-ibu-hamil/data/{id}/tambah', 'KaderController@addRegisterIbuHamilData');
