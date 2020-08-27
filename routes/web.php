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

Route::get('telegram/get-updates', 'TelegramController@getUpdates');
Route::get('telegram/get-me', 'TelegramController@getMe');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/surat', 'Admin\PemesananController@surat')->name('admin.send.surat');
Route::prefix('admin')->group(function () {
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');

    //password reset route
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/chart', 'AdminController@chart')->name('admin.chart');

    //Admin Artikel
    Route::get('/artikel', 'Admin\ArtikelController@index')->name('admin.artikel');
    Route::get('/artikel-tambah', 'Admin\ArtikelController@create')->name('admin.artikel.tambah');
    Route::post('/artikel-tambahdata', 'Admin\ArtikelController@store')->name('admin.artikel.tambahdata');
    Route::get('/artikel/{id}/edit', 'Admin\ArtikelController@edit')->name('admin.artikel.edit');
    Route::patch('/artikel/{id}', 'Admin\ArtikelController@update')->name('admin.artikel.editdata');
    Route::delete('/artikel/{id}', 'Admin\ArtikelController@destroy')->name('admin.artikel.hapus');
    Route::get('/artikel/{id}/info', 'Admin\ArtikelController@show')->name('admin.artikel.info');

    //Admin Acara
    Route::get('/show-on-event/{pemesanan}', [
        \App\Http\Controllers\Admin\PemesananController::class, 'showEvent'
    ])->name('admin.event.show');

    Route::get('/hide-on-event/{pemesanan}', [
        \App\Http\Controllers\Admin\PemesananController::class, 'hideEvent'
    ])->name('admin.event.hide');
    Route::get('/acara', 'Admin\EventController@index')->name('admin.acara');
    Route::get('/acara-tambah', 'Admin\EventController@create')->name('admin.acara.tambah');
    Route::post('/acara-tambahdata', 'Admin\EventController@store')->name('admin.acara.tambahdata');
    Route::get('/acara/{id}/edit', 'Admin\EventController@edit')->name('admin.acara.edit');
    Route::patch('/acara/{id}', 'Admin\EventController@update')->name('admin.acara.editdata');
    Route::delete('/acara/{id}', 'Admin\EventController@destroy')->name('admin.acara.hapus');
    Route::get('/acara/{id}/info', 'Admin\EventController@show')->name('admin.acara.info');

    //Admin Fasilitas
    Route::get('/fasilitas', 'Admin\FacilityController@index')->name('admin.fasilitas');
    Route::get('/fasilitas-tambah', 'Admin\FacilityController@create')->name('admin.fasilitas.tambah');
    Route::post('/fasilitas-tambahdata', 'Admin\FacilityController@store')->name('admin.fasilitas.tambahdata');
    Route::get('/fasilitas/{id}/edit', 'Admin\FacilityController@edit')->name('admin.fasilitas.edit');
    Route::patch('/fasilitas/{id}', 'Admin\FacilityController@update')->name('admin.fasilitas.editdata');
    Route::delete('/fasilitas/{id}', 'Admin\FacilityController@destroy')->name('admin.fasilitas.hapus');
    Route::get('/fasilitas/{id}/info', 'Admin\FacilityController@show')->name('admin.fasilitas.info');

    //Admin Pemesanan
    Route::get('/pemesanan', 'Admin\PemesananController@index')->name('admin.pemesanan');
    Route::get('/detail-pemesanan/{pemesanan}', 'Admin\PemesananController@show')->name('admin.pemesanan.detail');
    Route::get('/detail-pemesanan/{pemesanan}/download-pengajuan', 'Admin\PemesananController@downloadSuratPengajuan')
        ->name('admin.pemesanan.download.pengajuan');
    Route::get('/detail-pemesanan/{pemesanan}/terima-pengajuan', 'Admin\PemesananController@terima_pengajuan')
        ->name('admin.pemesanan.terima_pengajuan');
    Route::get('/detail-pemesanan/{pemesanan}/kirim-ijin-penggunaan', 'Admin\PemesananController@kirimSuratIjinPenggunaan')
        ->name('admin.pemesanan.kirim-ijin-penggunaan');
    Route::get('/pemesanan/export', 'Admin\PemesananController@export')->name('admin.pemesanan.export');

});

Route::prefix('pengguna')->group(function () {
    Route::get('/', 'Pengguna\HomeController@index')->name('pengguna.home');

    Route::get('/fasilitas', 'Pengguna\FasilitasController@index')->name('pengguna.fasilitas');

    Route::get('/detail-fasilitas/{id}', 'Pengguna\FasilitasController@show')->name('pengguna.detail_fasilitas');

    Route::get('{facility}/{tipe}/pemesanan-fasilitas-harian', 'PemesananController@formPemesananPerHari')->name('pengguna.pemesanan_hari');
    Route::post('{facility}/{tipe}/pemesanan-fasilitas-harian', 'PemesananController@pesanPerHari')->name('pengguna.pesan.perhari');

    Route::get('{facility}/pemesanan-fasilitas-jam', 'PemesananController@formPemesananPerJam')->name('pengguna.pemesanan_jam');
    Route::post('/pesan-perjam', 'PemesananController@pesanPerJam')->name('pengguna.pesan.perjam');

    Route::get('/acara', 'Pengguna\EventController@index')->name('pengguna.daftar_acara');

    Route::get('/artikel', 'Pengguna\ArtikelController@index')->name('pengguna.artikel');

    Route::get('/detail-artikel/{id}', 'Pengguna\ArtikelController@show')->name('pengguna.detail_artikel');



    Route::post('pemesanan/jam', 'PemesananJamSiangController@store')->name('pengguna.pemesanan.jam');
});

