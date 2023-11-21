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
