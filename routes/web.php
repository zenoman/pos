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

// Dashboard
Route::get('dashboard','admin\dashboard@depan');

//admin
Route::resource('admin','admin\admincontroller');

//user
Route::resource('user','admin\usercontroller');

//supplier
Route::resource('supplier','admin\supliercontroller');

//kategori
Route::resource('kategori-barang','admin\kategoribarangcontroller');
Route::post('simpan-subkategori','admin\kategoribarangcontroller@simpansubkategori');
Route::get('hapussub/{id}','admin\kategoribarangcontroller@hapussubkategori');
Route::post('editsub/{id}','admin\kategoribarangcontroller@editsubkategori');
//uom
Route::resource('uom-barang','admin\uombarangcontroller');

//pembelian
Route::resource('pembelian','admin\pembeliancontroller');

//warna
Route::resource('warna','admin\warnacontroller');

//settingweb
Route::resource('setting','admin\settingcontroller');

//barang
Route::resource('barang','admin\barangcontroller');
Route::get('import-barang','admin\barangcontroller@import');
Route::get('/carisubkategori/{id}','admin\barangcontroller@carisubkategori');
Route::get('/arsipkan/{kode}','admin\barangcontroller@arsipkanbarang');
Route::get('/tampilkanbarang/{kode}','admin\barangcontroller@tampilkanbarang');
Route::get('/hapusbarang/{kode}','admin\barangcontroller@hapusbarang');
Route::get('/cetakqr/{kode}','admin\barangcontroller@cetakqr');
//auth
Auth::routes();

//merk
Route::resource('merk-barang','admin\merkcontroller');

//home
Route::get('/home', 'HomeController@index')->name('home');
