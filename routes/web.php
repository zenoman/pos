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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
