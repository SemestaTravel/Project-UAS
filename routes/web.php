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
Route::get('/', function () {
    //return view('welcome');
    return view('layouts.index');
});
Route::get('/beranda', function () {
    //return view('welcome');
    return view('layouts.beranda');

});
Route::get('/about', function () {
    //return view('welcome');
    return view('layouts.about');

});
Route::get('/sidebar', function () {
    //return view('welcome');
    return view('layouts.sidebar');
});
Route::get('/sidebar', function () {
    //return view('welcome');
    return view('layouts.sidebar');

});
Route::get('/greating', function () {
    return "Hallo teman travelingku";
});


Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai: '.$nama. '<br/>Departemen: '.$divisi;
});
Route::get('/kabar', function () {
    return view('kondisi');
});
