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


// Route kelola data users/karyawan
Route::get('/users', "Users@index");
Route::get('/users/tambah', "Users@create");
Route::post('/users/tambah', "Users@store");
Route::get('/users/edit/{id}', "Users@edit");
Route::post('/users/edit/{id}', "Users@update");
Route::get('/users/hapus/{id}', "Users@destroy");

// EOF Route kelola data users/karyawan

// Route kelola data produk/karyawan
Route::get('/produk', "Produk@index");
Route::get('/produk/tambah', "Produk@create");
Route::post('/produk/tambah', "Produk@store");
Route::get('/produk/edit/{id}', "Produk@edit");
Route::post('/produk/edit/{id}', "Produk@update");
Route::get('/produk/hapus/{id}', "Produk@destroy");

// EOF Route kelola data produk/karyawan
