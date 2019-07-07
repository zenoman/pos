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
// Dashboard===================================
Route::get('dashboard','admin\dashboard@depan');
Route::resource('admin','admin\admincontroller');
Route::resource('user','admin\usercontroller');
Route::resource('supplier','admin\supliercontroller');
Route::resource('kategori-barang','admin\kategoribarangcontroller');
Route::resource('uom-barang','admin\uombarangcontroller');
Route::resource('pembelian','admin\pembeliancontroller');