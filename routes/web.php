<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PartaiController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.detail');
Route::get('/search', [BeritaController::class, 'search'])->name('berita.search');

Route::post('/komentar', [BeritaController::class, 'komentar'])->name('berita.komentar');

Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

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

// Route::get('/profilpartai', function () {
//     return view('profilpartai');
// })->name('profilpartai');

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/');
    } else {
        return view('login');
    }
})->name('login');

Route::get('/kandidat', function () {
    return view('kandidat');
})->name('kandidat');

Route::get('/paslon', function () {
    return view('paslon');
})->name('paslon');
Route::get('/kategorisasi', function () {
    return view('kategorisasi');
})->name('kategorisasi');


Route::get('/partai', [PartaiController::class, 'index'])->name('partai');
Route::get('/partai/{id}', [PartaiController::class, 'show'])->name('partai.detail');

Route::get('/kandidat', [KandidatController::class, 'index'])->name('kandidat');
Route::get('/kandidat/{id}', [KandidatController::class, 'show'])->name('kandidat.detail');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('createFeedback', [FeedbackController::class, 'store'])->name('createFeedback');

