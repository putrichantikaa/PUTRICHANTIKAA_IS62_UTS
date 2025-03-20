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

Route::get('/master', function () {
    return view('master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/beranda', function () {
    return view('data.beranda');
});

Route::get('/formkar', function () {
    return view('formkar');
});

Route::get('/hasilkar', function () {
    return view('hasilkar');
});


Route::get('/hasilpas', function () {
    return view('hasilpas');
});

Route::get('/formpas',function () {
    return view('formpas');
});

Route::get('/hasilobat',function () {
    return view('hasilobat');
});

Route::get('/formobat',function () {
    return view('formobat');
});

Route::get('/hasilres',function () {
    return view('hasilres');
});

Route::get('/resep',function () {
    return view('resep');
});

Route::get('/hasilpengobt',function () {
    return view('hasilpengobt');
});

Route::get('/formpengobt',function () {
    return view('formpengobt');
});

