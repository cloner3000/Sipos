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

Route::name('pages.')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/anak', 'KaderController@listAnak')->name('anak');
    Route::get('/anak/tambah', 'KaderController@addListAnak')->name('add.anak');
    Route::get('/anak/{id}', 'KaderController@anakDetail')->name('detail.anak');
    Route::get('/anak/{id}/edit', 'KaderController@anakEdit')->name('edit.anak');
    Route::get('/pasangan', 'KaderController@listPasangan')->name('pasangan');
    Route::get('/pasangan/tambah', 'KaderController@addPasangan')->name('add.pasangan');
    Route::get('/pasangan/{id}', 'KaderController@detailPasangan');
    Route::get('/pasangan/{id}/edit', 'KaderController@editPasangan')->name('edit.pasangan');
    Route::get('/catatan', 'KaderController@catatanPage')->name('catatan');
    Route::get('/catatan/{id}/edit', 'KaderController@editCatatan')->name('edit.catatan');

    Route::get('/register-bayi/0-11', 'KaderController@registerBayi011')->name('register.011');
    Route::get('/register-bayi/12-23', 'KaderController@registerBayi1223')->name('register.1223');
    Route::get('/register-bayi/24-35', 'KaderController@registerBayi2435')->name('register.2435');
    Route::get('/register-bayi/48-59', 'KaderController@registerBayi4859')->name('register.4859');
    Route::get('/register-bayi/36-47', 'KaderController@registerBayi3647')->name('register.3647');
    Route::get('/register-bayi/0-11/{tahun}', 'KaderController@registerBayi011Tahun')->name('register.011.thn');
    Route::get('/register-bayi/12-23/{tahun}', 'KaderController@registerBayi1223Tahun')->name('register.1223.thn');
    Route::get('/register-bayi/24-35/{tahun}', 'KaderController@registerBayi2435Tahun')->name('register.2435.thn');
    Route::get('/register-bayi/36-47/{tahun}', 'KaderController@registerBayi3647Tahun')->name('register.3647.thn');
    Route::get('/register-bayi/48-59/{tahun}', 'KaderController@registerBayi4859Tahun')->name('register.4859.thn');
    Route::get('/register-bayi/data/{id_bayi}', 'KaderController@registerBayiDataPage');
    Route::get('/register-bayi/tambah-data', 'KaderController@addRegisterBayi')->name('add.register-bayi');
    Route::get('/register-bayi/edit-ntob/{id}', 'KaderController@editNtob')->name('edit.ntob');

    Route::get('/ibu-hamil', 'KaderController@ibuHamilPage')->name('ibu-hamil');
    Route::get('/ibu-hamil/tambah', 'KaderController@addIbuHamil')->name('add.ibu-hamil');
    Route::get('/ibu-hamil/data/{id}', 'KaderController@ibuHamilDataPage');
    Route::get('/ibu-hamil/data/{id}/tambah', 'KaderController@addIbuHamilData');

    Route::get('/posyandu', 'KaderController@posyandu')->name('posyandu');
    Route::get('/posyandu/tambah', 'KaderController@addPosyandu')->name('add.posyandu');
    Route::get('/posyandu/{id}/edit', 'KaderController@editPosyandu')->name('edit.posyandu');
    Route::get('/desa', 'KaderController@listDesa')->name('desa');
    Route::get('/desa/tambah', 'KaderController@addDesa')->name('add.desa');
    Route::get('/desa/{id}/edit', 'KaderController@editDesa')->name('edit.desa');

    Route::get('/wuspus', 'KaderController@registerWuspusPage')->name('wuspus');
    Route::get('/wuspus/tambah', 'KaderController@addRegisterWuspus')->name('add.wuspus');
});

Route::name('ajax.')->group(function () {
    Route::get('/ajax/catatan', 'AjaxController@getCatatanApi')->name('catatan');
    Route::get('/ajax/list-pasangan', 'AjaxController@getPasanganApi')->name('list-pasangan');
    Route::get('/ajax/list-anak', 'AjaxController@getAnakApi')->name('list-anak');
    Route::get('/ajax/list-desa', 'AjaxController@getDesaApi')->name('list-desa');
    Route::get('/ajax/list-posyandu', 'AjaxController@getPosyanduApi')->name('list-posyandu');
    Route::get('/ajax/register-bayi/{umur}/{tahun}', 'AjaxController@getRegisterBayiApi')->name('list-register-bayi');

    Route::get('/ajax/test/{id}', 'AjaxController@showRegisterBayiData')->name('data.register-bayi');
});

Route::name('crud.')->group(function () {
    Route::post('/crud/edit_catatan', 'CrudController@editCatatan')->name('edit.catatan');
    Route::post('/crud/add_pasangan', 'CrudController@addPasangan')->name('add.pasangan');
    Route::post('/crud/edit_pasangan', 'CrudController@editPasangan')->name('edit.pasangan');
    Route::post('/crud/delete_pasangan', 'CrudController@deletePasangan')->name('delete.pasangan');
    Route::post('/crud/add_anak', 'CrudController@addAnak')->name('add.anak');
    Route::post('/crud/edit_anak', 'CrudController@editAnak')->name('edit.anak');
    Route::post('/crud/delete_anak', 'CrudController@deleteAnak')->name('delete.anak');
    Route::post('/crud/add_desa', 'CrudController@addDesa')->name('add.desa');
    Route::post('/crud/edit_desa', 'CrudController@editDesa')->name('edit.desa');
    Route::post('/crud/delete_desa', 'CrudController@deleteDesa')->name('delete.desa');
    Route::post('/crud/add_posyandu', 'CrudController@addPosyandu')->name('add.posyandu');
    Route::post('/crud/edit_posyandu', 'CrudController@editPosyandu')->name('edit.posyandu');
    Route::post('/crud/delete_posyandu', 'CrudController@deletePosyandu')->name('delete.posyandu');
    Route::post('/crud/add_register_bayi', 'CrudController@addRegisterBayi')->name('add.register-bayi');
    Route::post('/crud/edit_ntob', 'CrudController@editNtobBayi')->name('edit.ntob');
});
