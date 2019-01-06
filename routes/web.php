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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/regtoken', 'HomeController@regToken');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/catatan', 'KaderController@getCatatanPage');
Route::get('/catatan/tambah', 'KaderController@addCatatan');

Route::get('/register-bayi/0-11', 'KaderController@getRegisterBayi011')->name('register.011');
Route::get('/register-bayi/12-23', 'KaderController@getRegisterBayi1223')->name('register.1223');
Route::get('/register-bayi/24-35', 'KaderController@getRegisterBayi2435')->name('register.2435');
Route::get('/register-bayi/36-47', 'KaderController@getRegisterBayi3647')->name('register.3647');
Route::get('/register-bayi/48-59', 'KaderController@getRegisterBayi4859')->name('register.4859');
Route::get('/register-bayi/0-11/{tahun}', 'KaderController@getRegisterBayi011Tahun')->name('register.011.thn');
Route::get('/register-bayi/12-23/{tahun}', 'KaderController@getRegisterBayi1223Tahun')->name('register.1223.thn');
Route::get('/register-bayi/24-35/{tahun}', 'KaderController@getRegisterBayi2435Tahun')->name('register.2435.thn');
Route::get('/register-bayi/36-47/{tahun}', 'KaderController@getRegisterBayi3647Tahun')->name('register.3647.thn');
Route::get('/register-bayi/48-59/{tahun}', 'KaderController@getRegisterBayi4859Tahun')->name('register.4859.thn');


// Route::get('/register-bayi/tambah', 'KaderController@addRegisterBayi');
Route::get('/register-bayi/data/{id_bayi}', 'KaderController@getRegisterBayiDataPage');
// Route::get('/register-bayi/data/{id_bayi}/tambah', 'KaderController@addRegisterBayiData');

Route::get('/register-wuspus', 'KaderController@getRegisterWuspusPage');
Route::get('/register-wuspus/tambah', 'KaderController@addRegisterWuspus');

Route::get('/register-ibu-hamil', 'KaderController@getRegisterIbuHamilPage');
Route::get('/register-ibu-hamil/tambah', 'KaderController@addRegisterIbuHamil');
Route::get('/register-ibu-hamil/data/{id}', 'KaderController@getRegisterIbuHamilDataPage');
Route::get('/register-ibu-hamil/data/{id}/tambah', 'KaderController@addRegisterIbuHamilData');

Route::get('/list-pasangan', 'KaderController@getListPasangan');
Route::get('/list-pasangan/tambah', 'KaderController@addListPasangan')->name('add.pasangan');
Route::get('/list-anak', 'KaderController@getListAnak');
Route::get('/list-anak/tambah', 'KaderController@addListAnak')->name('add.anak');
Route::get('/list-posyandu', 'KaderController@getListPosyandu');
Route::get('/list-posyandu/tambah', 'KaderController@addListPosyandu')->name('add.posyandu');
Route::get('/list-desa', 'KaderController@getListDesa');
Route::get('/list-desa/tambah', 'KaderController@addListDesa')->name('add.desa');


Route::name('ajax.')->group(function (){
  Route::get('/ajax/{key}/hello', 'AjaxController@getCatatanApi');
});



Route::get('/test', function(){
  return App\Helpers\KeyHelper::generateKey(1);
});
