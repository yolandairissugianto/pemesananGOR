<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function(){
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit'); 
    Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');

    //password reset route
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    //Admin Artikel
    Route::get('/artikel', 'Admin\ArtikelController@index')->name('admin.artikel');
    Route::get('/artikel-tambah', 'Admin\ArtikelController@create')->name('admin.artikel.tambah');
    Route::post('/artikel-tambahdata', 'Admin\ArtikelController@store')->name('admin.artikel.tambahdata');
    Route::get('/artikel/{id}/edit', 'Admin\ArtikelController@edit')->name('admin.artikel.edit');
    Route::patch('/artikel/{id}', 'Admin\ArtikelController@update')->name('admin.artikel.editdata');
    Route::get('/artikel/{id}/delete', 'Admin\ArtikelController@destroy')->name('admin.artikel.delte');

    //Admin Fasilitas
    Route::get('/fasilitas', 'Admin\FacilityController@index')->name('admin.fasilitas');
    Route::get('/fasilitas-tambah', 'Admin\FacilityController@create')->name('admin.fasilitas.tambah');
    Route::post('/fasilitas-tambahdata', 'Admin\FacilityController@store')->name('admin.fasilitas.tambahdata');
    Route::get('/fasilitas/{id}/edit', 'Admin\FacilityController@edit')->name('admin.fasilitas.edit');
    Route::patch('/fasilitas/{id}', 'Admin\FacilityController@update')->name('admin.fasilitas.editdata');

    
    Route::get('/acara', function () {
        return view('admin.acara.acara');
    })->name('admin.acara');
    
    
});

Route::prefix('pengguna')->group(function(){
    Route::get('/', function () {
        return view('pengguna.home');
    })->name('pengguna.home');
    
    Route::get('/fasilitas', function () {
        return view('pengguna.fasilitas');
    })->name('pengguna.fasilitas');

    Route::get('/detail-fasilitas', function () {
        return view('pengguna.detail_fasilitas');
    })->name('pengguna.detail_fasilitas');

    Route::get('/pemesanan-fasilitas-harian', function () {
        return view('pengguna.pemesanan_hari');
    })->name('pengguna.pemesanan_hari');

    Route::get('/pemesanan-fasilitas-jam', function () {
        return view('pengguna.pemesanan_jam');
    })->name('pengguna.pemesanan_jam');

    Route::get('/acara', function () {
        return view('pengguna.daftar_acara');
    })->name('pengguna.daftar_acara');

    Route::get('/artikel', function () {
        return view('pengguna.artikel');
    })->name('pengguna.artikel');

    Route::get('/detail-artikel', function () {
        return view('pengguna.detail_artikel');
    })->name('pengguna.detail_artikel');
});

