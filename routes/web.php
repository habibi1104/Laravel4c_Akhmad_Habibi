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

//Routing Mahasiswa
route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
route::get('mahasiswa-create', 'MahasiswaController@create')->name('mahasiswa.create');
route::post('simpan-data-mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
route::post('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');
route::get('hapus-mahasiswa/{id}', 'MahasiswaController@destroy')->name('mahasiswa.hapus');
//Routing makul
route::get('makul', 'MakulController@index')->name('makul');
route::get('makul-create', 'MakulController@create')->name('makul.create');
route::post('simpan-data', 'MakulController@store')->name('simpan.data');

route::get('edit-makul/{id}', 'MakulController@edit')->name('makul.edit');
route::post('update-makul/{id}', 'MakulController@update')->name('update.makul');
route::get('hapus-makul/{id}', 'MakulController@destroy')->name('makul.hapus');

//routing Nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('nilai-create', 'NilaiController@create')->name('nilai.create');
Route::post('nilai-simpan', 'NilaiController@store')->name('nilai.simpan');
Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('nilai-update/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('nilai-hapus/{id}', 'NilaiController@destroy')->name('hapus.nilai');
