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

Route::get('/enkripsi', 'EncryptController@enkripsi');
Route::get('/data', 'EncryptController@data');
Route::get('/data/{data_rahasia}', 'EncryptController@data_proses');
Route::get('/hash', 'EncryptController@hash');
Route::get('/hash/check', 'EncryptController@hash_check');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

Route::get('/session/tampil', 'SessionController@tampilSession');
Route::get('/session/buat', 'SessionController@buatSession');
Route::get('/session/hapus', 'SessionController@hapusSession');

Route::get('/pesan', 'NotifController@index');
Route::get('/pesan/sukses', 'NotifController@sukses');
Route::get('/pesan/peringatan', 'NotifController@peringatan');
Route::get('/pesan/gagal', 'NotifController@gagal');

Route::get('/error/{nama}','ErrorController@index');