<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/cekkamar', function () {
    return view('kamar');
})->name('cekkamar'); // Ganti 'kamar' menjadi 'cekkamar' sesuai dengan route

Route::get('/pesan-kamar/{nomor}', function ($nomor) {
    // Logika untuk menangani pesan kamar
})->name('pesan.kamar');


Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/register', [HomeController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [HomeController::class, 'register'])->name('register.submit');

Route::get('/change-email', [HomeController::class, 'showChangeEmailForm'])->name('change.email.form');
Route::post('/change-email', [HomeController::class, 'changeEmail'])->name('change.email');




















