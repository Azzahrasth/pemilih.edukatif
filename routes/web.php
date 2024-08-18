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
    return view('home');
})->name('home');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/detailberita', function () {
    return view('detailberita');
})->name('detailberita');

Route::get('/tentangkami', function () {
    return view('tentangkami');
})->name('tentangkami');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/profilkandidat', function () {
    return view('profilkandidat');
})->name('profilkandidat');

Route::get('/profilpaslon', function () {
    return view('profilpaslon');
})->name('profilpaslon');

Route::get('/profilpartai', function () {
    return view('profilpartai');
})->name('profilpartai');

Route::get('/login', function () {
    return view('login');
})->name('login');