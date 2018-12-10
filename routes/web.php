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

Route::get('/Pengunjung-balita-0-12bulan', 'KaderController@getPengunjungBalita012blnPage');
Route::get('/Pengunjung-balita-1-5tahun', 'KaderController@getPengunjungBalita15thnPage');
Route::get('/Pengunjung-ibu', 'KaderController@getPengunjungIbuPage');
Route::get('/Absensi-kader-pkk', 'KaderController@getAbsensikaderpkkPage');
Route::get('/Absensi-kader-posy', 'KaderController@getAbsensikaderposyPage');
Route::get('/Absensi-plkb', 'KaderController@getAbsensiplkbPage');
Route::get('/Absensi-medisparamedis', 'KaderController@getAbsensimedisparamedisPage');
Route::get('/jumlahbayi-lahir', 'KaderController@getjmlhbayilahirPage');
Route::get('/jumlahbayi-meninggal', 'KaderController@getjmlhbayimeninggalPage');
