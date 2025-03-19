<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback(function () {
//     return view('notfound');
// });

Route::get('/beranda', function () {
    return view('data.beranda');
});

Route::get('/form', function () {
    return view('karyawan.form');
});

Route::get('/hasil', function () {
    return view('karyawan.hasil');
});

Route::get('/master', function () {
    return view('karyawan.master');
});

Route::get('/hasilpas', function () {
    return view('hasilpas');
});

Route::get('/hasilobat',function () {
    return view('hasilobat');
});

Route::get('/formpas',function () {
    return view('formpas');
});

Route::get('/formobat',function () {
    return view('formobat');
});

