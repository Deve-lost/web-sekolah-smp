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

Route::get('admin/login', [
	'uses' => 'AuthController@login',
	'as' => 'login'
]);

Route::post('login', [
	'uses' => 'AuthController@postLogin',
	'as' => 'post.login'
]);

Route::get('logout', [
	'uses' => 'AuthController@logout',
	'as' => 'logout'
]);

// Sites
Route::get('/', [
	'uses' => 'SiteController@index',
]);

Route::get('profil-sekolah', [
	'uses' => 'SiteController@profilSekolah',
	'as' => 'profil.sekolah'
]);

Route::get('sambutan-kepala-sekolah', [
	'uses' => 'SiteController@sambutanKepsek',
	'as' => 'sambutan.kepsek'
]);

Route::get('visi-misi', [
	'uses' => 'SiteController@visiMisi',
	'as' => 'visi.misi'
]);

Route::get('berita/informasi', [
	'uses' => 'SiteController@beritaInfo',
	'as' => 'berita.info'
]);

Route::get('modul/guru', [
	'uses' => 'SiteController@mGuru',
	'as' => 'modul.guru'
]);

Route::get('modul/siswa', [
	'uses' => 'SiteController@mSiswa',
	'as' => 'modul.siswa'
]);

Route::get('download/modul/{modul}/file/modul', [
	'uses' => 'ModulController@download',
	'as' => 'modul.download'
]);

Route::get('galeri', [
	'uses' => 'SiteController@galeri',
	'as' => 'galeri'
]);

Route::group(['middleware' => 'auth'], function() {
	// Admin
	Route::prefix('admin')->group(function() {
		// Dashboard
		Route::get('dashboard', [
			'uses' => 'DashboardController@admin',
			'as' => 'admin.dashboard'
		]);

		// Profil Sekolah
		Route::resource('profil-sekolah','ProfilSekolahController', ['only' => ['index','edit','update']]);

		// Slider
		Route::resource('slider','SliderController', ['except' => ['destroy']]);
		Route::get('slider/destroy/{slider}', [
			'uses' => 'SliderController@destroy',
			'as' => 'slider.destroy'
		]);

		// Berita dan Informasi
		Route::resource('berita/informasi','InformasiController', ['except' => ['destroy']]);
		Route::get('berita/informasi/destroy/{informasi}', [
			'uses' => 'InformasiController@destroy',
			'as' => 'berita.destroy'
		]);

		// Modul
		Route::resource('modul','ModulController', ['only' => ['index','store']]);
		Route::get('modul/destroy/{modul}', [
			'uses' => 'ModulController@destroy',
			'as' => 'modul.destroy'
		]);

		Route::post('modul/update/', [
			'uses' => 'ModulController@update',
			'as' => 'modul.update'
		]);

		// Galeri
		Route::resource('galeri','GaleriController', ['except' => ['destroy']]);
		Route::get('galeri/destroy/{galeri}', [
			'uses' => 'GaleriController@destroy',
			'as' => 'galeri.destroy'
		]);

		// Extra Kulikuler
		Route::resource('extrakurikuler','ExtrakurikulerController', ['except' => ['destroy']]);
		Route::get('extrakurikuler/destroy/{extrakurikuler}', [
			'uses' => 'ExtrakurikulerController@destroy',
			'as' => 'extra.destroy'
		]);

	});
});