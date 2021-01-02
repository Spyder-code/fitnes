<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'UserController@index');
Route::post('/addPesan', 'UserController@addPesan');
Route::post('/postRegister', 'UserController@addRegister');

Auth::routes();
// Auth::routes(['register' => false]);
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('admin/profile', 'AdminController@profile');
    Route::get('admin/transaksi', 'AdminController@listTransaksi');
    Route::get('admin/pesan', 'AdminController@pesan');
    Route::get('admin/list-member', 'AdminController@listMember');
    Route::get('admin/list-artikel', 'AdminController@listArtikel');
    Route::get('admin/absensi', 'AdminController@absensi');
    Route::get('admin/list-member/{id}', 'AdminController@detailMember');
    Route::get('admin/tambah-artikel', 'AdminController@artikel');
    Route::post('addArtikel', 'AdminController@artikelPost');
    Route::post('konfirmasiPembayaran', 'AdminController@konfirmasiPembayaran');
    Route::post('updateStatusMember', 'AdminController@updateStatusMember');
    Route::post('deleteArtikel', 'AdminController@deleteArtikel');
    Route::post('deleteMember', 'AdminController@deleteMember');
    Route::post('storeAbsen', 'AdminController@storeAbsen');
    Route::post('destroyAbsen', 'AdminController@destroyAbsen');
    Route::post('deletePesan', 'AdminController@deletePesan');
});

Route::group(['middleware' => ['role:member']], function () {
    Route::get('profile','UserController@profile')->name('profile');
    Route::post('profile','UserController@updateUser')->name('updateProfile');
    Route::post('pembayaran','UserController@pembayaran')->name('pembayaran');
    Route::post('updatePasswordUser','UserController@updatePassword');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/userRegister', 'UserController@register');
Route::get('/logout', 'Auth\LoginController@logout');
