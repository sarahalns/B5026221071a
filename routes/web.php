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

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding";
});

Route::get('/halo2', function () {
    return "<h1>Haloo apa kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('/5026221071', function () {
    return view('5026221071');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/layoutweek5', function () {
    return view('layoutweek5');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/uts', function () {
    return view('uts');
});

Route::get('/validasi', function () {
    return view('validasi');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');


Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');



Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/show/{id}','App\Http\Controllers\PegawaiController@show');

//route latihan soal keranjangbelanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangBelanjaController@beli');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangBelanjaController@batal');
Route::post('/keranjangbelanja/tambah','App\Http\Controllers\KeranjangBelanjaController@tambah');

//route nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@nilai');
Route::get('/nilaikuliah/nilaitambah','App\Http\Controllers\NilaiController@nilaitambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

//Route tugas pra EAS(lipstick)
Route::get('/lipstick','App\Http\Controllers\LipstickController@index');
Route::get('/lipstick/tambah','App\Http\Controllers\LipstickController@tambah');
Route::post('/lipstick/store','App\Http\Controllers\LipstickController@store');
Route::get('/lipstick/edit/{id}','App\Http\Controllers\LipstickController@edit1');
Route::post('/lipstick/update','App\Http\Controllers\LipstickController@update');
Route::get('/lipstick/hapus/{id}','App\Http\Controllers\LipstickController@hapus');
Route::get('/lipstick/cari','App\Http\Controllers\LipstickController@cari');
Route::get('/lipstick/view/{id}','App\Http\Controllers\LipstickController@view1');

//Route EAS Karyawan
Route::get('/karyawan','App\Http\Controllers\KaryawanController@index2');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah1');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
